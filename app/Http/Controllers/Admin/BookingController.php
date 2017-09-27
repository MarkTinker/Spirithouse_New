<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Generate xlsx file and download it
     *
     * @return \Illuminate\Http\Response
     */
    public function getReport()
    {
        include(app_path(). '\functions\Spreadsheet\Excel\Writer.php');
        $workbook = new Spreadsheet_Excel_Writer();
    }

    /**
     * View Bookings for the class
     *
     * @return \Illuminate\Http\Response
     */
    public function getViewbooking($id)
    {
        $sql="select bookingid, firstname, lastname, email, classes.classid, classes.classprice, classname, classseats, schedule.scheduleseats, date_format(scheduledate, '%d %M %y') as date2, seats, nametags, `vip`, phone, `notes`
        from bookings
        left join schedule
        on bookings.scheduleid=schedule.scheduleid
        left join classes
        on schedule.classid=classes.classid
        where bookings.scheduleid=".quote_smart($id);

        $bookings = DB::select($sql);

        dd($bookings);
    }
}
