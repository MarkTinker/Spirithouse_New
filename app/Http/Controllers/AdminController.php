<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $yesterday = date("Ymd", strtotime("-1 days"));        
        $sql="select scheduleid, schedule.classid, date_format(scheduledate, '%W %d %M %y') as date2,
            date_format(scheduledate, '%W') as dayname, classname, full, bookings, classseats, daynight, discount, discount_price, discountclassprice, scheduleseats 
            from schedule, classes where schedule.classid=classes.classid and scheduledate > ".$yesterday." order by scheduledate, daynight" ;
        $classes = DB::select($sql);
        //dd($sql);        
        return view('admin.index')->withData($classes);
    }

    public function getViewcerts()
    {
        return view('admin.certs.add');
    }

    public function getCerts()
    {

    }

    public function getVip()
    {

    }

    public function getMaillist()
    {

    }

    public function getViewmenu()
    {

    }

    public function getViewstock()
    {

    }

    public function getViewwine()
    {

    }

    public function getViewnewsletter()
    {

    }

    public function getViewproducts()
    {
        
    }
}
