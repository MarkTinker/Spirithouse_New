<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\CClass;
use App\Http\Traits\CommonTrait;
use App\Schedule;

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
        return view('admin.classes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classes.create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Do Validation Check of Incomming Request

        $this->validate($request, array(
            'classname'       => 'required|numeric',
            'classdescription'     => 'required|max:191',
            'classprice'      => 'required',
            'classseats'     => 'required'
        ));

        $classObj = new CClass;
        $classObj->classname = $request->classname;
        $classObj->classdescription = $request->classdescription;
        $classObj->classdate = $request->classprice;
        $classObj->daynight = $request->classseats;
        $classObj->save();

        Session::flash('success', 'Class created successfully');
        return redirect()->route('admin.classes.index');
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
     * Select Class page for editing
     *
     *
     * @return \Illumintate\Http\Response
     */
    public function getShowEditlist()
    {
        $classes = CClass::orderBy('classname')->get();
        $data['classes'] = $classes;

        $displaydate = '2014-07-01';

        $yesterday = date("Ymd", strtotime("-1 days"));        
        $sql = "select DISTINCT schedule.classid, classname from schedule, classes where schedule.classid=classes.classid and scheduledate > '".$displaydate."'";
        $result = DB::select($sql);

        
        for ($i = 0; $i < count($result); $i++)
        {            
            $sql4="select count(schedule.classid) as classcount from schedule where schedule.classid='".$result[$i]->classid."' AND scheduledate >'".$displaydate."'";
            $result4 = DB::select($sql4);
            $data['classinfo'][$i] = [];
            $data['classinfo'][$i]['classcount'] = $result4[0]->classcount;
            $data['classinfo'][$i]['classname'] = $result[$i]->classname;
            $data['classinfo'][$i]['classid'] = $result[$i]->classid;
        }
        
        return view('admin.classes.showeditlist')->withData($data);
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