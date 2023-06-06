<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('layouts.template');
    }
    
    public function homePage(){
        return view('layouts.template');
    }
    
    public function getServices(){
        return view('site.services');
    }
    
    public function getLaptopCategory(){
        return view('site.laptop-category-all-in-one');
    }
    
    public function getGamingLaptopCategory(){
        return view('site.gaming-laptop');
    }
    
    public function getBudgetLaptopCategory(){
        return view('site.budget-laptop');
    }
    
    public function getContactUs(){
        return view('site.contact-us');
    }
    
}
