<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex()
    {
        return view('pages.home');
    }

    public function getRestaurant()
    {
        return view('pages.home');
    }

    public function getSchool()
    {
        return view('pages.home');
    }

    public function getShop()
    {
        return view('pages.home');
    }

    public function getVouchers()
    {
        return view('pages.home');
    }

    public function getFoodtours()
    {
        return view('pages.home');
    }

    public function getMapsandinfo()
    {
        return view('pages.home');
    }
}
