<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.home');
    }

    public function getRestaurant()
    {
        return view('pages.restaurant');
    }

    public function getSchool()
    {
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
