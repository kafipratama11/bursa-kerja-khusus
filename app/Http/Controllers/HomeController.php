<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        if(auth()->user()->can('view_dashboard')){
            return view('admin.dashboard-admin');
        }
        return view('index');
    }
    public function employe(){
        return view('employer/employer-site');
    }
    public function employe_login(){
        return view('employer.employer-dashboard');
    }
    public function employe_signup(){
        return view('employer/employer-signup');
    }

}