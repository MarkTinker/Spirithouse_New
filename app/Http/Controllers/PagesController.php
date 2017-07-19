<?php

namespace App\Http\Controllers;

use App\Menu;
use DB;
use Illuminate\Http\Request;

include(app_path().'/includes/class_functions.inc.php');

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.home');
    }

    public function getRestaurant()
    {
        $menus = Menu::where('menuorder','>', 1)
                    ->orderBy('menucat')
                    ->orderBy('menuorder')
                    ->orderBy('menuprice')
                    ->get();
        return view('pages.restaurant')->withMenus($menus);
    }

    public function getSchool()
    {
        $yesterday=date("Y-m-d", strtotime("-2 days"));        
        $digest_date = "2008-11-01";
        $date_diff = abs(strtotime(date('y-m-d'))-strtotime($digest_date)) / 86400;

        ###### FAQ used in the calendar ######
        $faq= faq_section();
        
        $schedules = DB::table('schedule')->select('schedule.scheduleid', 'classes.classname', 'classes.classdescription', 'classes.classseats',
             'classes.classprice', 'schedule.starttime', 'schedule.discount', 'schedule.discount_price', 'schedule.scheduledate', 'schedule.full',
             'schedule.bookings', 'schedule.scheduleseats', 'schedule.daynight')
             ->leftJoin('classes as classes', 'schedule.classid', '=', 'classes.classid')
             ->where('schedule.scheduledate', '>', $yesterday)
             ->orderBy('schedule.scheduledate')
             ->orderBy('schedule.daynight')
             ->get();
             
        //return view('pages.school')->withDisplaydata($schedules);

        $schedule = Array();
        $old_class_year=0;
        $old_class_month=0;
        $old_class_day=0;

        foreach($schedules as $sch){
            $scheduleid         = $sch->scheduleid;
            $classname          = $sch->classname;
            $classdescription   = $sch->classdescription;
            $classseats         = $sch->classseats;
            $scheduleseats      = $sch->scheduleseats;            
            $classprice         = $sch->classprice;
            $discount           = $sch->discount;
            $discountprice      = $sch->discount_price;
            $bookings           = $sch->bookings;
            $class_year         = date('Y', strtotime($sch->scheduledate));
            $class_month        = date('m', strtotime($sch->scheduledate));
            $class_day          = date('d', strtotime($sch->scheduledate));
            $full               = $sch->full;
            $starttime          = $sch->starttime;
            $daynight           = $sch->daynight;

            $classname=strip_classname($classname);

            # checking to see if class seats is being over-ridden by the scheduled amount of seats
            # we can override the default classseats in the schedule now - this checks to see
            # if a class has more or less seats than default for today 
            if($scheduleseats > 0)
            {
                $classseats=$scheduleseats;                
            }
            else
            {
                $classseats=$classseats;
            }

            # are we looping on a class on the same day as yesterday??  if so, increment $classes_for_today variable
            if(($class_year==$old_class_year) && ($class_month==$old_class_month) && ($class_day==$old_class_day)) 
            {
                $classes_for_today++;
            } 
            else 
            {
                $classes_for_today=0;
            }

            #add values to the associative array
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['scheduleid']=$scheduleid;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['classname']=$classname;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['classdescription']=$classdescription;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['classseats']=$classseats;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['classprice']=$classprice; 
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['discount']=$discount;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['discountprice']=$discountprice;       
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['bookings']=$bookings;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['full']=$full;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['starttime']=$starttime;
            $schedule[$class_year][$class_month][$class_day][$classes_for_today]['daynight']=$daynight;

            #update the vars for the next loop
            $old_class_year=$class_year;
            $old_class_month=$class_month;
            $old_class_day=$class_day;
        }

        ##################        
        # locating the last date in the database
        $last_date_in_database =$old_class_year."-".$old_class_month."-".$old_class_day;
        
        
        # make the next day's date, and explode the date into year/month/date elements
        $next_date_after_last_date_in_database_array  =explode("-", date("Y-m-d", strtotime("+1 days", strtotime($last_date_in_database))));

        # grab the elements
        $finish_year   =$next_date_after_last_date_in_database_array[0];
        $finish_month  =$next_date_after_last_date_in_database_array[1];
        $finish_day    =$next_date_after_last_date_in_database_array[2];
        
        # put the FINISH marker into the schedule array
        $schedule[$finish_year][$finish_month][$finish_day][0]['classname']="FINISH";

        $displaydata ="";

        ##################

     
        $testmonth = date('F'); 
        
        
        // $calendarstarted is used as a control to close the divs for the code that generates the calendar on the FIRST of the month. .
        $calendarstarted=0;
        #Starts the ROW AND HEADER for the school calendar if today's date is NOT the first day of the month.
        if(date('j')>=1){
        $calendarstarted=1;
        //This section outputs the first Month according to the calendar
        $displaydata .="
            <div class='row'>
            <div class='col-md-3 specs'>
                <div class='faq'>
                        <h4>Frequently Asked Questions</h4>".
                        $faq."
                    </div>		

            </div>
            <!-- end.three -->
            
            <div class='col-md-9 last content'>
                
                <div class='wrap'>				
                    
                    <!-- // SUB-SECTION: UPCOMING CLASSES -->
                    <div id='school_classes' class='subsection'>
                        <div class='inner'>
                            
                            <table class='school'>
                                    
                                    <caption>Classes for ". $testmonth ."</caption>
                                    <thead>
                                    <tr class='header'>
                                            <th class='date_col'>Date</th>						                
                                            <th>Class Information</th>
                                            <th class='nightday_col'>Day / Night</th>
                                            <th class='avail_col'>Availability</th>
                                    </tr>
                                    </thead>						
                                    <tbody>";
            
        }

        ####################
        //CHANGE $i below to 0 if you want to show the first date in the array    
        ###################
        
        for($i=-1;$i<9999;$i++) {
        $search_year=date("Y", strtotime("+".$i." days"));
        $search_month=date("m", strtotime("+".$i." days"));
        $show_month=date("M", strtotime("+".$i." days"));
        
        ####### Grabs the DAY for today 
        ####### if you want a date in the past, you need use $yesterday for the $searchday and then get it to increment 
        ####### something like this: $search_day=date("d", (strtotime("+".$i."days", strtotime($yesterday)))); ---BUT you need to enter this for every $search_ variable.
        $search_day=date("d", strtotime("+".$i." days"));
        
        $display_month=date("F", strtotime("+".$i." days"));
              
        //echo "this is $search_day and number is $i and yesterday is $yesterday";
        //exit();

        ## ######Do a check to see if the DAY is a SAT OR SUN and change the <TR Class> to WE so the weekends are in a different colour
        //CSSGRID - we can use this to colour
            $dayshow=date('D', strtotime("+".$i." days")); 
            $dayname=date('l', strtotime("+".$i." days"));
            if($dayname=="Saturday" || $dayname=="Sunday") {
            $rowtype="we";
        } else {
            $rowtype="bg";
        }
        #############################
            #If it's the first of the month then we print the MONTH before we start going through the days.
        
        if(number_format($search_day)==1) {

            if($calendarstarted==1){
                    $displaydata .= "	</table>

                        </div>
                        <!-- end.inner -->
                        </div>
                        <!-- // END SUB-SECTION: UPCOMING CLASSES -->
                
            
                        </div>
                        <!-- end.wrap -->
            
                        </div>
                        <!-- end.content -->		
                        </div>
                        <!-- end.row -->

                    ";

                }




        $displaydata.= "
            <div class='row'>
            <div class='col-md-3 specs'>
                <div class='faq'>
                    <h4>Frequently Asked Questions</h4>".
                    $faq."
                </div>
            </div>		
        <div class='col-md-9 last content'>
            
            <div class='wrap'>				
                
                <!-- // SUB-SECTION: UPCOMING CLASSES -->
                <div id='school_classes' class='subsection'>
                    <div class='inner'>
                        
                        <table class='school'>
                                <caption>Classes for ".$display_month."</caption>
                                <thead>
                                
                                <tr class='header'>
                                        <th class='date_col'>Date</th>						                
                                        <th>Class Information</th>
                                        <th class='nightday_col'>Day / Night</th>
                                        <th class='avail_col'>Availability</th>
                                </tr>
                                </thead>						
                                <tbody>";
        }

        #is there an index in the array on this year/month/day?
        if(array_key_exists($search_year,$schedule)) {
        if(array_key_exists($search_month,$schedule[$search_year])) {
            if(array_key_exists($search_day,$schedule[$search_year][$search_month])) {

            $days_since_last_class=0;
            #1st: check how many classes today
            $classes_for_today=sizeof($schedule[$search_year][$search_month][$search_day]);            
            
            #####################################
            ### HAMISH - THIS CODE CREATES THE PAD CLASS##
            #####################################  
            if($classes_for_today>1){
            $pad="pad";
                } else {
                $pad=" ";
                }
            
            for($j=0;$j<$classes_for_today;$j++) {

                #####################################
                # see if we've hit the finish marker yet?                
                $class=$schedule[$search_year][$search_month][$search_day][$j]['classname'];
                if($class=="FINISH") {
                $i=9999;
                } else {
                #if it's the first class of the day, open the ROW
                if($j==0) $displaydata.= "
                                    <tr>
                                        <td class='date_col' rowspan='".$classes_for_today."'>
                                            <div class='date ".$pad."'>
                                                <span class='dw'>$dayshow</span>
                                                <span class='d'>$search_day</span>
                                                <span class='m'>$show_month</span>
                                            </div>
                                        </td>
                                        ";

                $scheduleid       =$schedule[$search_year][$search_month][$search_day][$j]['scheduleid'];
                $bookings         =$schedule[$search_year][$search_month][$search_day][$j]['bookings'];
                $class            =$schedule[$search_year][$search_month][$search_day][$j]['classname'];
                $classseats       =$schedule[$search_year][$search_month][$search_day][$j]['classseats'];
                $classprice       =$schedule[$search_year][$search_month][$search_day][$j]['classprice']; 
                $discount		  =$schedule[$search_year][$search_month][$search_day][$j]['discount'];
                $discountprice		  =$schedule[$search_year][$search_month][$search_day][$j]['discountprice'];  	
                $classdescription  =$schedule[$search_year][$search_month][$search_day][$j]['classdescription'];
                $starttime        =$schedule[$search_year][$search_month][$search_day][$j]['starttime'];
                $daynight        =$schedule[$search_year][$search_month][$search_day][$j]['daynight'];
                $seatsleft        =$classseats-$bookings;
                

                    ###################### WORK OUT IF CLIENT IS ELLIGBLE FOR DISCOUNT  ###################
                    $discount_total = $classprice-$discountprice;
                
                    if ($discount == 1)
                    //if (($isfan==1) AND ($discount == 1))//- the old code that checked for facebook fans and discount
                    {
                    $classprice = "<del>$classprice</del> <span class='teal'>for you: &#36; $discountprice</span>";
                    $discounttext= "<span class='teal'>WOW! &#36;$discount_total discount for you</span>";
                    $discountlink="";
                    }ELSE{
                    //$classprice=$classprice;
                    $discounttext=' &nbsp;';
                    $discountlink=''; 
                    }
                    
                
                ###################### SPLITTING THE CLASS DESCRIPTION  ###################
                $printdescription = split_classdescription($classdescription);
                $description= $printdescription[0]. "<br/><b>Recipes include:</b>";
                $recipes= $printdescription[1];
                $printrecipes= str_replace("*", "<hr> <p>", $recipes); // replace asterisk with <hr>and <p> for styling
                #################
                if($seatsleft>1)
                    {$seattext='seats';
                    }else{
                        $seattext='seat';}
                ############works out if it's a day or night class to be used when the class is FULL
                if($daynight==0){$classtype='Day';}
                if($daynight==1) {$classtype='Night';}
                ############ 
                if($bookings >= $classseats) {
                    $displaydata.= "
                                        <td>
                                            <div class='classblock'>
                                                <p class='classname'>".$class."</p>
                                                <p class='info'>No Seats Available 
                                                    <span class='mobile_links'>
                                                        <a href='school-waitlist.php?scheduleid=".$scheduleid."'><small>Join Waitlist</small></a> / 
                                                        <a href='#' class='toggle'>Details &darr;</a>
                                                    </span>
                                                </p>
                                                <a href='#' class='showdescription toggle'>Details &darr;</a>
                                                    <div class='details' style='display:none;'>
                                                        <b>Starts:</b> ".$starttime." &mdash;
                                                        <b>Cost:$</b> ".$classprice."<br>
                                                        ".$description."
                                                        ".$printrecipes."
                                                    </div>
                                            </div>
                                        </td>
                                        <td class='nightday'>".$classtype."</td>
                                        <td class='button'>
                                            <a class='waitlist' href='school-waitlist.php?scheduleid=".$scheduleid."'>Join Waitlist</a>
                                            <div class='classblock'> <p class='info'>Class Full </div>
                                        </td>
                        </tr>	
                        
                        ";
                        

                
                } else {

                $displaydata.="
                
                                    <td>
                                            <div class='classblock'>
                                                <p class='classname'>".$class."</p>
                                                <p class='info'>".$discounttext."</p>
                                                    <span class='mobile_links'>
                                                        <a href='https://www.spirithouse.com.au/booking.php?scheduleid=".$scheduleid."'>
                                                        Book Now</a> /
                                                        <a href='#' class='toggle'>Details &darr;</a>
                                                    </span>
                                                </p>
                                                <a href='#' class='showdescription toggle'>Details &darr;</a>
                                                    <div class='details' style='display:none;'>
                                                        <b>Starts:</b> ".$starttime." &mdash;
                                                        <b>Cost:$</b> ".$classprice."<br>
                                                        ".$description."
                                                        ".$printrecipes."
                                                    </div>
                                            </div>
                                        </td>
                                        <td class='nightday'>".$classtype."</td>
                                        <td class='button'>                                            
                                            <a class='book' href=".route('pages.book', $scheduleid).">Book Now</a>
                                            <div class='classblock'><p class='info'>".$seatsleft. $seattext." left </div>
                                        </td>
                        
                                </tr>		
                
                        ";

                }

                # if it's the last class of the day, DO NOTHING - POSSIBLY DELETE THIS
                if(($j+1)==$classes_for_today) 
                
                $displaydata.= "	
                        
                
                        
                        ";
                }
            }
            } else {
            $displaydata.= " 
            
                    
                                        <td class='date_col'>
                                            <div class='date'>
                                                <span class='dw'>".$dayshow."</span>
                                                <span class='d'>".$search_day."</span>
                                                <span class='m'>".$show_month."</span>
                                            </div>
                                        </td>
            
                                        <td>
                                            <div class='classblock'>
                                                <p class='classname'>No Class Today</p>
                                                <p class='info'>no class today
                                                    
                                                </p>
                                            </div>
                                        </td>
                                        <td class='nightday'>&nbsp;</td>
                                        <td>
                                            &nbsp;
                                        </td>
                    </tr>";
            }


        } else {
            $displaydata.= " 	
                    <tr>
                                        <td class='date_col'>
                                            <div class='date'>
                                                <span class='dw'>".$dayshow."</span>
                                                <span class='d'>".$search_day."</span>
                                                <span class='m'>".$show_month."</span>
                                            </div>
                                        </td>
            
                                        <td>
                                            <div class='classblock'>
                                                <p class='classname'>No Class Today</p>
                                                <p class='info'>no class today
                                                    
                                                </p>
                                            </div>
                                        </td>
                                        <td class='nightday'>&nbsp;</td>
                                        <td>
                                            &nbsp;
                                        </td>
                    </tr>";
        }


        } else {
        $displaydata.= " <tr>
                                        <td class='date_col'>
                                            <div class='date'>
                                                <span class='dw'>".$dayshow."</span>
                                                <span class='d'>".$search_day."</span>
                                                <span class='m'>".$show_month."</span>
                                            </div>
                                        </td>
            
                                        <td>
                                            <div class='classblock'>
                                                <p class='classname'>No Class Today</p>
                                                <p class='info'>no class today
                                                    
                                                </p>
                                            </div>
                                        </td>
                                        <td class='nightday'>&nbsp;</td>
                                        <td>
                                            &nbsp;
                                        </td>
                    </tr>";      }

        }

        $displaydata.= "			</table>

            </div>
                    <!-- end.inner -->
                </div>
                <!-- // END SUB-SECTION: UPCOMING CLASSES -->
                
            
            </div>
            <!-- end.wrap -->
            
        </div>
        <!-- end.content -->		
        </div>
        <!-- end.row -->



        ";
        
        return view('pages.school')->withDisplaydata($displaydata);
    }
 
    public function getShop()
    {
        return view('pages.shop');
    }

    public function getVouchers()
    {
        return view('pages.vouchers');
    }

    public function getFoodtours()
    {
        return view('pages.foodtours');
    }

    public function getMapsandinfo()
    {
        return view('pages.mapsandinfo');
    }


    public function getRecipe()
    {
        return view('pages.recipe');
    }

    public function getNewsletter()
    {
        return view('pages.newsletter');
    }

    public function getPrivacy()
    {
        return view('pages.privacy');
    }

    public function getBook($scheduleid)
    {
        return view('pages.book');
    }
}
