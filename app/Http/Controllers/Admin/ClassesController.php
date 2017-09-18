<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\CClass;
use App\Http\Traits\CommonTrait;
use App\Schedule;
use Session;

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
            'classname'       => 'required',
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        
        $sqlid = "select * from classes where classid=".$id;
        $result = DB::select($sqlid);
        $data['editclassinfo']['classid'] = $result[0]->classid;
        $data['editclassinfo']['classname'] = $result[0]->classname;        
        $data['editclassinfo']['classdescription'] = $result[0]->classdescription;        
        $data['editclassinfo']['classprice'] = $result[0]->classprice;
        $data['editclassinfo']['classseats'] = $result[0]->classseats;

        return view('admin.classes.edit')->withData($data);
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
     * Show a Search View
     *
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getSearchView()
    {
        return view('admin.classes.search');
    }

    /**
     * Search Function
     *
     *
     */
    
    public function postSearch(Request $request)
    {
        // Perfom a bit of filtering
        $find = strtoupper($request->find);
        $find = strip_tags($find);
        $find = trim($find);

        $field = $request->field;

        $sql = "select bookingid, bookings.scheduleid, firstname, lastname, email, classes.classid, classname, scheduledate, date_format(scheduledate, '%d %M %y') as classdate, seats, nametags, phone, `notes`, `credits`
        from bookings
        left join schedule
        on bookings.scheduleid=schedule.scheduleid
        left join classes
        on schedule.classid=classes.classid
        where bookings .$field LIKE \"%".$find."%\" order by scheduledate";

        
        $result = DB::select($sql);

        $data['field'] = $field;
        $data['find'] = $find;
        $data['result'] = $result;
        return view('admin.classes.searchresult')->withData($data);
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
        $this->validate($request, array(
            'classname'       => 'required',
            'classdescription'     => 'required|max:191',
            'classprice'      => 'required',
            'classseats'     => 'required'
        ));

        $classObj = CClass::find($id);
        if( $classObj == null)
        {
            Session::flash('errmsg', "Can't find class of the id");
            return redirect()->route('classes.index');
        }

        $classObj->classname = $request->classname;
        $classObj->classdescription = $request->classdescription;
        $classObj->classprice = $request->classprice;
        $classObj->classseats = $request->classseats;
        $classObj->save();

        Session::flash('success', 'Class data updated successfully');
        return redirect()->route('classes.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = CClass::find($id);
        $schedule = Schedule::where('classid','=', $id)->get();

        $class->delete();
        $schedule->delete();

        $request->session()->flash('success', 'Data deleted successfully');
        return redirect()->route('classes.index');
    }
}