<?php

namespace App\Http\Controllers;
use App\Models\loker;
use App\Models\Apply;
use App\Models\Employe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function apply($id){
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        $loker = loker::find($id);
        $userId = Auth::id();
        $existingApplication = Apply::where('user_id', $userId)
                                ->where('loker_id', $id)
                                ->exists();

                                $loker_id = $loker->id; // Mengambil ID loker
    
                                $otherLokers = Loker::select('lokers.*')
                                    ->joinSub(function ($query) use ($loker_id) {
                                        $query->select('employe_id')
                                            ->from('lokers')
                                            ->where('id', $loker_id);
                                    }, 'sub', 'lokers.employe_id', '=', 'sub.employe_id')
                                    ->where('lokers.id', '!=', $loker_id)
                                    ->get();
    
        return view('user.apply',compact('dataU','loker','existingApplication','otherLokers'));
        }

    public function apply_loker(Request $request,$id){
        $request->validate([
            'cv' => 'required'

        ]);
        $data = [
            'user_id'             => $request->user_id,
            'employe_id'          => $request->employe_id,
            'loker_id'            => $request->loker_id,
            'cv'                  => $request->cv,
            'portofolio'          => $request->portofolio,
            'portofolio_online'   => $request->portofolio_online,
        ];
        
        $userId = Auth::id();
        $existingApplication = Apply::where('user_id', $userId)
                                ->where('loker_id', $id)
                                ->exists();
                                
                                if($existingApplication) {
                                    return redirect()->back()->with('error', 'Anda telah mengajukan lamaran untuk pekerjaan ini sebelumnya.');
                                }else{
                                    Apply::where('id',$id)->create($data);
                                    return redirect()->back();
                                }
    }

    public function delete_apply($id){
        $data = Apply::find($id);

        if($data){
            $data->delete();
            return redirect()->route('user.index-user');
        }


    }

    // public function applyHistory() {
    //     // Dapatkan ID pengguna yang sedang login
    //     $userId = Auth::id();
    
    //     // Dapatkan riwayat lamaran pengguna
    //     $applyHistory = Apply::where('user_id', $userId)->get();
    
    //     return view('user.user-profile', compact('applyHistory'));
    // }
    

    public function view_apply($id){
        $data = Loker::find($id);
        $user = Auth::id();
        $dataU = User::where('id', $user)->first();
        $apply = Apply::select('apply.id as id', 'employes.name as nama_perusahaan', 'lokers.bagian as bagian', 'lokers.kota_kabupaten as kota', 'lokers.provinsi as provinsi', 'lokers.nama_pekerjaan as nama_loker', 'lokers.expired as waktu', 'lokers.deskripsi as deskripsi', 'lokers.requirement as requirement')
        ->join('users', 'apply.user_id', '=', 'users.id')
        ->join('lokers', 'apply.loker_id', '=', 'lokers.id')
        ->join('employes', 'lokers.employe_id', '=', 'employes.id')
        ->where('users.nisn', $dataU->nisn)
        ->find($id);

        $employe = Employe::where('id', $data)->first();


       

        $otherLoker = loker::select('employes.name as nama_perusahaan','employes.id as em_id', 'lokers.bagian as bagian')
        ->join('employes', 'lokers.employe_id', '=', 'employes.id')
        // ->where('employes.id', '1')
        ->get();

        return view('user.view-apply', compact('dataU','apply','otherLoker'));
    }
    
    
}