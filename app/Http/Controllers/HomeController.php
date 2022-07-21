<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $data = [];

        $data['products'] = Product::get();
        return view('index', $data);
    }

    public function residential()
    {
        return view('residential');
    }

    public function super()
    {
        return view('super');
    }
    public function resort()
    {
        return view('resort');
    }
    public function stall()
    {
        return view('stall');
    }

    public function warehouse()
    {
        return view('warehouse');
    }
    public function office()
    {
        return view('office');
    }

    public function land()
    {
        return view('land');
    }
    public function shouse()
    {
        return view('shouse');
    }
    public function restate()
    {
        return view('restate');
    }
    public function apartment()
    {
        return view('apartment');
    }

    public function sellerpanel()
    {
        return view('sellerpanel');
    }
    public function seller()
    {
        return view('seller');
    }

    public function staffpanel()
    {

        $data = [];

        $data['products'] = Product::get();
        return view('staffpanel', $data);
    }




    /*Belongs to AdminController
    /*
    public function staff(){
        return view ('super');
    }
    */
}
