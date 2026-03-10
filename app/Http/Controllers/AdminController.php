<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indox(){
        return view('admin.laptops.index');
    }

    public function card(){
        $laptops = Laptop::all();
        return view('admin.laptops.card',compact('laptops'));
    }
 
    public function create(){
        return view('admin.laptops.create');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }   
    
    public function postLaptops(){
        return view('admin.laptops.index');
    }    
}
