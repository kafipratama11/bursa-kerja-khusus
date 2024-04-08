<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        if(auth()->user()->can('create_work')){
        $data = Employe::find($id);
        $data->load('loker');
        $loker = $data->Loker; // Ambil data loker yang terkait dengan employe
        return view('employer.employer-create-loker', compact('data', 'loker'));
        }else{
            $employeId = Auth::id();
            $dataE = Employe::where('id', $employeId)->first();
            return redirect()->route('employe.employe',compact('dataE'))->with('new_account',''. $dataE->name);
        }
    }

    public function create_loker(Request $request){
        $request->validate([
            'nama_pekerjaan'    => 'required',
            'provinsi'          => 'required',
            'kota_kabupaten'    => 'required',
            'bagian'            => 'required',
            'waktu'             => 'required',
            'gaji'              => 'required',
            'email'             => 'required|email',
            'expired'           => 'required',
            'deskripsi'         => 'required',
            'requirement'       => 'required',
        ]);
    
        
            $data['employe_id']             = $request->employe_id;
            $data['nama_pekerjaan']         = $request->nama_pekerjaan;
            $data['bagian']                 = $request->bagian;
            $data['nama_perusahaan']        = $request->nama_perusahaan;
            $data['provinsi']               = $request->provinsi;
            $data['kota_kabupaten']         = $request->kota_kabupaten;
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
        $ganjil = Loker::whereRaw('id % 2 != 0')->get();
        $genap = Loker::whereRaw('id % 2 = 0')->get();

        return view('employer.employer-detail-loker',compact('data'));
    }

    public function delete(Request $request, $id){
        $data = Loker::find($id);

        if($data){
            $data->delete();
            return redirect()->route('employe.employe')->with('successdel' ,'oke');
        }
    }

    public function photo_profile(Request $request, $id){

        $photo      = $request->file('photo');
        $filename   = date('y-m-d').$photo->getClientOriginalName();
        $path       ='photo-employe/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($photo));

        $data['image'] = $filename;

        Employe::where('id', $id)->update($data);
        return redirect()->back();
    }

    
}