<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Employe;
use App\Models\loker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function apply($id){
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        $loker = loker::find($id);
    
        return view('user.apply',compact('dataU','loker'));
    }

    public function apply_loker(Request $request,$id){
        $data = [
            'user_id'             => $request->user_id,
            'employe_id'          => $request->employe_id,
            'loker_id'            => $request->loker_id,
            'nama'                => $request->nama,
            'email'               => $request->email,
            'no_telp'             => $request->no_telp,
            'jenis_kelamin'       => $request->jenis_kelamin,
            'provinsi'            => $request->provinsi,
            'kota'                => $request->kota,
            'cv'                  => $request->cv,
            'portofolio'          => $request->portofolio,
            'portofolio_online'   => $request->portofolio_online,
        ];

        Apply::where('id',$id)->create($data);

        return redirect()->back();
        // $data['user_id']              = $request->user_id;
        // $data['employe_id']           = $request->employe_id;
        // $data['loker_id']             = $request->loker_id;
        // $data['nama']                 = $request->nama;
        // $data['email']                = $request->email;
        // $data['no_telp']              = $request->no_telp;
        // $data['jenis_kelamin']        = $request->jenis_kelamin;
        // $data['provinsi']             = $request->provinsi;
        // $data['kota']                 = $request->kota;
        // $data['cv']                   = $request->cv;
        // $data['portofolio']           = $request->portofolio;
        // $data['portofolio_online']    = $request->portofolio_online;


    }
    
}
