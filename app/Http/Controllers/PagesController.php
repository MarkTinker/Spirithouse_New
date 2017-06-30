<?php

namespace App\Http\Controllers;

use App\Menu;

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
