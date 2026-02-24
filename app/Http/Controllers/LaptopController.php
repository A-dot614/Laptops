<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function index(){
        // $laptop = Laptop::all();
        return view('site.home' );
    }
    
    public function detail(Laptop $shop){
        return view('site.detail', compact('shop'));
    }

    public function laptop()
{
    $laptops = Laptop::all();   // get all laptops from database

    return view('site.laptop', compact('laptops'));
}


    public function service(){
        return view('site.service');
    }

    public function about(){
        return view('site.about');
    }

    public function contact(){
        return view('site.contact');
    }


}
