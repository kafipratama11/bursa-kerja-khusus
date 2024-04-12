<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function apply(){
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        return view('user.apply',compact('dataU'));
    }
}
