<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        return view ('welcome');
    }
    
    public function index(){
        return view('index');
    }

    public function residential(){
        return view('residential');
    }

    public function super(){
        return view ('super');
    }
    public function resort(){
        return view ('resort');
    }
    public function stall(){
        return view ('stall');
    }

    public function warehouse(){
        return view ('warehouse');
    }
    public function office(){
        return view ('office');
    }

    public function land(){
        return view ('land');
    }
    public function shouse(){
        return view('shouse');
    }
    public function restate(){
        return view('restate');
    }
    public function apartment(){
        return view('apartment');
    }

    public function sellerpanel(){
        return view('sellerpanel');
    }
    public function seller(){
        return view('seller');
    }

    public function staffpanel(){
        return view('staffpanel');
    }
    
    
    

    /*Belongs to AdminController
    /* 
    public function staff(){
        return view ('super');
    }
    */
}
