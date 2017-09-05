<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\CClass;
use App\Http\Traits\CommonTrait;

class ClassesController extends Controller
{
    use CommonTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yesterday = date("Ymd", strtotime("-1 days"));        
        $sql="select scheduleid, schedule.classid, date_format(scheduledate, '%W %d %M %y') as date2,
            date_format(scheduledate, '%W') as dayname, classname, full, bookings, classseats, daynight, discount, discount_price, discountclassprice, scheduleseats 
            from schedule, classes where schedule.classid=classes.classid and scheduledate > ".$yesterday." order by scheduledate, daynight" ;
        $classes = DB::select($sql);
        //dd($sql);        
        return view('admin.classes.index')->withData($classes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get Classes Data 

        $data = [];
        $data['classes'] = CClass::orderBy('classname')->get();        
        $data['rendered_classdate'] = $this->DateSelectBox("date",date("d"), date("m"), date("Y"), 50, 65, 70);
        return view('admin.classes.create')->withData($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
