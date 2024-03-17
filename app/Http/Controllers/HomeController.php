<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        if(auth()->user()->can('view_dashboard')){
            return view('dashboard-admin');
        }
        return view('user');
    }
    public function employe(){
        return view('employer-site');
    }
    public function user(){
        return view('employer-site');
    }

}