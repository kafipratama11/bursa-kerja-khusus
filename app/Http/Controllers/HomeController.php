<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function employerEditProfile(Request $request)
    {
        $employeId = Auth::id();
        $employe = Profile::where('id', $employeId)->first();
    
        // Tampilkan view untuk mengedit profil
        return view('employer.employer-edit-profile', compact('employe'));
    }

    public function update(Request $request, $id)
    {

        $employeId = Auth::id();
    
        $photo      = $request->file('photo');
        $photo      = $request->file('photo');
        $filename   = date('y-m-d').$photo->getClientOriginalName();
        $path       ='photo-employe/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($photo));

        $data['image'] = $filename;
        $data['name'] = $request->name;
        $data['lokasi'] = $request->lokasi;
        $data['no_telp'] = $request->no_telp;
        $data['email'] = $request->email;
        $data['deskripsi'] = $request->deskripsi;
    
        // Perbarui profil yang sesuai dengan id pengguna yang sedang login
        Profile::where('id', $employeId)->update($data);
    
        // Redirect kembali ke halaman edit profil
        return redirect()->route('employe.edit-employe',['id' => $id]);
    }
    
    

}