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
    
        return view('user.apply',compact('dataU','loker','existingApplication'));
    }

    public function apply_loker(Request $request,$id){
        $data = [
            'user_id'             => $request->user_id,
            'employe_id'          => $request->employe_id,
            'loker_id'            => $request->loker_id,
            'email'               => $request->email,
            'no_telp'             => $request->no_telp,
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

    // public function applyHistory() {
    //     // Dapatkan ID pengguna yang sedang login
    //     $userId = Auth::id();
    
    //     // Dapatkan riwayat lamaran pengguna
    //     $applyHistory = Apply::where('user_id', $userId)->get();
    
    //     return view('user.user-profile', compact('applyHistory'));
    // }
    
    
    
}