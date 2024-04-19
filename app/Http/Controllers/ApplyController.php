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
        $loker = Loker::find($id);
        $apply = Apply::find($id);
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
                                    
        return view('user.apply',compact('dataU','loker','existingApplication','otherLokers', 'apply'));
    }

    public function apply_loker(Request $request,$id){
        $data = [
            'id'                  => $request->id,
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

    public function applyHistory() {
        $user = Auth::user();
        
        $history = Apply::select('id','employes.name as nama_perusahaan', 'lokers.nama_pekerjaan as nama_loker')
        ->join('users', 'apply.user_id', '=', 'users.id')
        ->join('lokers', 'apply.loker_id', '=', 'lokers.id')
        ->join('employes', 'lokers.employe_id', '=', 'employes.id')
        ->where('users.nisn', $user->nisn)
        ->get();

        return view('user.user-profile',compact('history'));
    }
    
    public function anotherLoker($id) {
        // Ambil ID loker yang sedang ditampilkan
        $loker = Loker::find($id);
        $loker_id = $loker->id; // Mengambil ID loker
    
        $other_lokers = Loker::select('lokers.*')
            ->joinSub(function ($query) use ($loker_id) {
                $query->select('employe_id')
                    ->from('lokers')
                    ->where('id', $loker_id);
            }, 'sub', 'lokers.employe_id', '=', 'sub.employe_id')
            ->where('lokers.id', '!=', $loker_id)
            ->get();
        
        return view('user.apply', compact('other_lokers'));
    }
    
    public function delete_apply($id){
        $data = Apply::find($id);

        if($data){
            $data->delete();
            return redirect()->back();
        }
    }
}