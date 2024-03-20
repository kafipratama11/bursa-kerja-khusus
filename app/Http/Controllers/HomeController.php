<?php

namespace App\Http\Controllers;

use App\Models\Employe;
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
        $dataE = Employe::first();
        return view('employer.employer-dashboard',compact('dataE'));
    }
    public function employe_signup(){
        return view('employer/employer-signup');
    }

    public function employerEditProfile(Request $request,$id){
        $dataE = Employe::get();
        return view('employer.employer-edit-profile',compact('dataE'));
    }

}