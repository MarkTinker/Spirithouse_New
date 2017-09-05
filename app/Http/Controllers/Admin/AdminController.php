<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        // Redirect to view class action
        return redirect()->route('classes.index');
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
