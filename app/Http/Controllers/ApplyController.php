<?php

namespace App\Http\Controllers;
use App\Models\loker;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function apply(Request $request, $id){
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        $data = Loker::find($id);
        return view('user.apply',compact('data'));
        return view('user.apply',compact('dataU'));
    }
}