<?php

namespace App\Http\Controllers;

use App\Menu;
use DB;
use Illuminate\Http\Request;

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
        $yesterday=date("Y-m-d", strtotime("-1 days"));

        /*
        $sql="select scheduleid, classname, classdescription, classseats, classprice, starttime, discount, discount_price, DATE_FORMAT(scheduledate, '%Y') as year,
  DATE_FORMAT(scheduledate, '%m') as month, DATE_FORMAT(scheduledate, '%d') as day,
  full, bookings,scheduleseats, daynight from
  schedule left join classes
  on schedule.classid=classes.classid
  where scheduledate >'$yesterday'
  order by scheduledate, daynight 
  ";
        */
        $schedules = DB::table('schedule')->select('schedule.scheduleid', 'classes.classname', 'classes.classdescription', 'classes.classseats',
             'classes.classprice', 'schedule.starttime', 'schedule.discount', 'schedule.discount_price', 'schedule.scheduledate', 'schedule.full',
             'schedule.bookings', 'schedule.scheduleseats', 'schedule.daynight')
             ->leftJoin('classes as classes', 'schedule.classid', '=', 'classes.classid')
             ->where('schedule.scheduledate', '>', $yesterday)
             ->orderBy('schedule.scheduledate')
             ->orderBy('schedule.daynight')
             ->get();
        //return $schedules;
        return view('pages.school');
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
}
