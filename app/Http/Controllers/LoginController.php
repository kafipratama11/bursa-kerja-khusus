<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function apply(){
        return view('apply');
    }

    public function login_proses(Request $request){
        $request->validate([
            'nisn' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'nisn'  => $request->nisn,
            'password'  => $request->password,
        ];
        if(Auth::attempt($data)){
            $user = Auth::user(); // Mendapatkan instance pengguna yang saat ini login
            return redirect()->route('admin.index-user')->with('success' ,'Welcome,'. $user->name );
        } else{
            return redirect()->route('login')-> with('failed','email atau password salah');
        }
    }
    public function logout(){
        $user = Auth::user();
    
        Auth::logout();
    
        return redirect()->route('login')->with('successout','GoodBye,' .  $user->name);
    }

}