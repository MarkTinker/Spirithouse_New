<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Traits\CommonTrait;

class SchoolController extends Controller
{
    use CommonTrait;
    public function getBook($scheduleid)
    {
        $schedule = DB::table('classes')->select('classes.classid', 'classes.classname', 'classes.classdescription', 'classes.classprice', 'classes.classseats', 
        'schedule.scheduleid', 'schedule.full', 'schedule.bookings', 'schedule.starttime', 'classes.discountclassprice', 'schedule.discount_price',
        'schedule.discount', 'schedule.scheduleseats', 'schedule.scheduledate')
        ->leftJoin('schedule as schedule', 'schedule.classid','=', 'classes.classid')
        ->where('schedule.scheduleid','=', $scheduleid)->get();        
        $data = [];
        if($schedule != null)
        {
            $data['bookings'] = $schedule[0]->bookings;
            $data['scheduleid'] = $scheduleid;                        
            $data['classname'] = $schedule[0]->classname;
            $data['classdescription'] = $schedule[0]->classdescription;
            $data['classprice'] = $schedule[0]->classprice;
            $data['classseats'] = $schedule[0]->classseats;
            $data['scheduleseats'] = $schedule[0]->scheduleseats;
            $data['classdate'] = date('d/m/y', strtotime($schedule[0]->scheduledate));
            $data['classemaildate'] = date('W D M Y', strtotime($schedule[0]->scheduledate));
            $data['classfulldate'] = date('Y-m-d', strtotime($schedule[0]->scheduledate));
            $data['starttime'] = $schedule[0]->starttime;
            $data['classday'] = date('D', strtotime($schedule[0]->scheduledate));
            $data['discount'] = $schedule[0]->discount;
            $data['discountclassprice'] = $schedule[0]->discountclassprice;
            $data['discount_price'] = $schedule[0]->discount_price;

            # checking to see if class seats is being over-ridden by the scheduled amount of seats
            # we can override the default classseats in the schedule now - this checks to see
            # if a class has more or less seats than default for today 
            if($schedule[0]->scheduleseats > 0)
            {
                $maxseats =	$schedule[0]->scheduleseats;
            }
            else
            {
                $maxseats = $schedule[0]->classseats;
            }

            $data['maxseats'] = $maxseats;            
            $spotsleft = $maxseats - $data['bookings'];
            $data['spotsleft'] = $spotsleft;

            $classname=strip_classname($data['classname']);	            
            $printdescription = split_classdescription($data['classdescription'] );

            $data['classname'] = $classname;
            $data['printdescription'] = $printdescription;
            
            $description= $printdescription[0];
            $recipes= $printdescription[1];
            $printrecipes= str_replace("*", "<li class='wide'>", $recipes); // replace asterisk with LI
            
            $data['description'] = $description;
            $data['recipes'] = $recipes;
            $data['printrecipes'] = $printrecipes;
            if ($data['discount_price'] > 1)
            {
                $classprice = $data['discount_price'];
                $data['classprice'] = $classprice;
            }

            $emaildescription = "
                <table style='margin:5px; border-top:1px solid #ccc;border-bottom:1px solid #ccc;' cellspacing=5>
                    <tr valign='top'><td width='15%'>Date:</td><td><strong>".$data['classemaildate']."</strong></td></tr>
                    <tr valign='top'><td>Class:</td><td><strong>".$data['classname']."</strong></td></tr>
                    <tr valign='top'><td>&nbsp;</td><td>".$data['classdescription']."</td></tr>
                    <tr valign='top'><td>Start Time:</td><td><strong>".$data['starttime']."</strong></td></tr>
                </table>";
            
            $data['emaildescription'] = $emaildescription;
            return view('school.book')->withData($data);
        }
    }

    public function getWaitlist($scheduleid)
    {
        $waitlist = DB::table('classes')->select('classes.classid', 'classes.classname', 'classes.classdescription', 'classes.classprice', 'classes.classseats',
        'schedule.scheduleid', 'schedule.full', 'schedule.bookings', 'schedule.discount', 'schedule.scheduleseats', 'schedule.scheduledate', 'schedule.scheduleseats')
        ->leftJoin('schedule as schedule', 'schedule.classid','=', 'classes.classid')
        ->where('schedule.scheduleid','=', $scheduleid)->get();

        $data=[];

        if($waitlist != null)
        {
            $data['bookings'] = $waitlist[0]->bookings;
            $data['classname'] = $waitlist[0]->classname;
            $data['classdescription'] = $waitlist[0]->classdescription;
            $data['classprice'] = $waitlist[0]->classprice;
            $data['classdate'] = date('d/m/y', strtotime($waitlist[0]->scheduledate));
            $data['scheduleid'] = $waitlist[0]->scheduleid;

            if($waitlist[0]->scheduleseats > 0)
            {
                $maxseats =	$waitlist[0]->scheduleseats;
            }
            else
            {
                $maxseats = $waitlist[0]->classseats;
            }

            $spotsleft = $maxseats - $data['bookings'];
            $data['spotsleft'] = $spotsleft;

            $classname=strip_classname($data['classname']);	            
            $printdescription = split_classdescription($data['classdescription'] );

            $data['classname'] = $classname;
            $data['printdescription'] = $printdescription;

            $description= $printdescription[0];
            $recipes= $printdescription[1];
            $printrecipes= str_replace("*", "<li class='wide'>", $recipes); // replace asterisk with LI
            
            $data['description'] = $description;
            $data['recipes'] = $recipes;
            $data['printrecipes'] = $printrecipes;
        }

        return view('school.waitlist')->withData($data);
    }
}
