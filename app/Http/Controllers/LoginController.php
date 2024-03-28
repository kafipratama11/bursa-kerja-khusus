<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\loker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        $data = Loker::all();
        $user = User::count('role_id','2');
        $employe = Employe::count();
        $loker = Loker::count();
        
        return view('index', compact('data','loker','user','employe'));
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
            $employe = Auth::guard('employe')->user(); // Mendapatkan instance pengguna yang saat ini login
            return redirect()->route('employe.employe')->with('success' ,'Welcome,'. $employe->name );
        } else{
            return redirect()->route('employer-site')-> with('failed','email atau password salah');
        }
    }

    public function employe_register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'lokasi' => 'required',
            'no_telp' => 'required',
            'deskripsi' => 'required',
        ]);
    
        

            $data['name']       = $request->name;
            $data['email']      = $request->email;
            $data['password']   = $request->password;
            $data['lokasi']     = $request->lokasi;
            $data['no_telp']    = $request->no_telp;
            $data['deskripsi']  = $request->deskripsi;

         $user = Employe::create($data);

         $user->syncRoles(['new_account']);

        return redirect()->route('employer-site')->with('success', 'Registrasi berhasil. Silakan masuk.');
    }
    
    

    public function logout(){
        $user = Auth::user();
    
        Auth::logout();
    
        return redirect()->route('login')->with('successout','GoodBye,');
    }
    
    public function employe_logout(){    
        Auth::logout();
    
        return redirect()->route('login')->with('successout','GoodBye,');
    }

}