<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function apply(){
        return view('apply');
    }
    
    public function about(){
        return view('about');
    }
    
    public function company(){
        return view('company-list');
    }
    
    public function profileCompany(){
        return view('profile-perusahaan');
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
        if(Auth::guard('web')->attempt($data)){
            $user = Auth::user(); // Mendapatkan instance pengguna yang saat ini login
            return redirect()->route('user.index-user')->with('success' ,'Welcome,'. $user->name );
        } else{
            return redirect()->route('login')-> with('failed','email atau password salah');
        }
    }

    public function employe_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email'  => $request->email,
            'password'  => $request->password,
        ];
        if(Auth::guard('employe')->attempt($data)){
            $employe = Auth::guard('employe'); // Mendapatkan instance pengguna yang saat ini login
            return redirect()->route('user')->with('success' ,'Welcome,'. $employe->name );
        } else{
            return redirect()->route('login')-> with('failed','email atau password salah');
        }
    }

    public function employe_register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    
        $data = [
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ];
    
        // Buat Employe baru
        $employe = Employe::create($data);
    
        if(Auth::guard('employe')->attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect()->route('user')->with('success' ,'Welcome, ' . $employe->name);
        } else {

            return redirect()->route('login')->with('failed','Email atau password salah');
        }
    }
    

    public function logout(){
        $user = Auth::user();
    
        Auth::logout();
    
        return redirect()->route('login')->with('successout','GoodBye,' .  $user->name);
    }

}