<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome()
    {
        return view('site.home');
    }
    public function getAbout()
    {
        return view('site.about');
    }
    public function getTeam()
    {
        return view('site.team');
    }
    public function getServices()
    {
        return view('site.services');
    }
}
