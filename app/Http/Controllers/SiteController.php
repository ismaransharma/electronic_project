<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('layouts.template');
    }
    
    public function homePage(){
        return view('site.home');
    }
}
