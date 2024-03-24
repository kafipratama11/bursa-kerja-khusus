<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeController extends Controller
{


    public function loker($id){
        $employeId = Auth::id();
        $employE = Employe::where('id', $employeId)->first();
        $data = Employe::find($id);
        $data->load('loker');
        $loker = $data->Loker;
        return view('employer.employer-loker',compact('loker','employE'));
    }
    

    public function new_loker(Request $request, $id){
        $data = Employe::find($id);
        $data->load('loker');
        $loker = $data->Loker; // Ambil data loker yang terkait dengan employe
        return view('employer.employer-create-loker', compact('data', 'loker'));
    }

    public function create_loker(Request $request){
        $request->validate([
            'nama_pekerjaan'    => 'required',
            'lokasi'            => 'required',
            'bagian'            => 'required',
            'waktu'             => 'required',
            'gaji'              => 'required',
            'email'             => 'required|email',
            'deskripsi'         => 'required',
            'requirement'       => 'required',
        ]);
    
        
            $data['employe_id']             = $request->employe_id;
            $data['nama_pekerjaan']         = $request->nama_pekerjaan;
            $data['bagian']                 = $request->bagian;
            $data['nama_perusahaan']        = $request->nama_perusahaan;
            $data['lokasi']                 = $request->lokasi;
            $data['waktu']                  = $request->waktu;
            $data['gaji']                   = $request->gaji;
            $data['email']                  = $request->email;
            $data['expired']                = $request->expired;
            $data['deskripsi']              = $request->deskripsi;
            $data['requirement']            = $request->requirement;

            Loker::create($data);
            return redirect()->route('employe.employe')->with('success', 'Registrasi berhasil. Silakan masuk.');
    }

    public function detail_loker(Request $request, $id){

        $data = Loker::find($id);

        return view('employer.employer-detail-loker',compact('data'));
    }
    
}