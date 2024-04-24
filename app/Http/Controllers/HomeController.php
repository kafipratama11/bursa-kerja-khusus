<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Jurusan;
use App\Models\loker;
use App\Models\Apply;
use App\Models\Profile;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function dashboard(){
        if(auth()->user()->can('view_dashboard')){
            $chartUser = User::role('user')->count();
            $employE = Employe::role('employer')->get();
            $dataE = Employe::withoutRole('employer')->get();
            $employe = Employe::role('employer')->count();
            $user = User::role('user')->count();
            $loker = loker::count();
            
            $data = Loker::all();
            $dataU = User::role('user')->get();

            $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

            $role = Role::where('guard_name','employe')->get();
            return view('admin.dashboard-admin', compact('employE','employe','user','loker','data','dataU','dataE','role','chartUser'));
        }

        $data = loker::all();
        $employe = Employe::count();
        $user = User::role('user')->count();
        $loker = Loker::count();
        $jurusan = Jurusan::all();
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        
        return view('index',compact('data','loker','user','employe','dataU','jurusan'));
    }
    
    public function employe(){
        return view('employer/employer-site');
    }
    
    public function employe_login(){
        $employeId = Auth::id();
        $dataE = Employe::where('id', $employeId)->first();
        return view('employer.employer-index',compact('dataE'));
    }
    public function employe_signup(){
        $data = Role::all();
        return view('employer/employer-signup', compact('data'));
    }

    public function employerEditProfile(Request $request)
    {
        $employeId = Auth::id();
        $employe = Employe::where('id', $employeId)->first();
    
        // Tampilkan view untuk mengedit profil
        return view('employer.employer-edit-profile', compact('employe'));
    }

    public function dashboard_employe(Request $request)
    {
        $employeId      = Auth::id();
        $employE        = Employe::where('id', $employeId)->first();
        $verivikasi     = 0;
        $tolak          = 1;
        $terima         = 2;
        $applies = Apply::select('users.name as user_name', 'lokers.bagian', 'lokers.nama_pekerjaan', 'applies.created_at', 'applies.id as id', 'applies.loker_id as loker_id', 'applies.employe_id as employe_id', 'applies.user_id as user_id', 'applies.cv as cv', 'applies.portofolio as portofolio', 'applies.portofolio_online as porto')
                ->join('users', 'applies.user_id', '=', 'users.id')
                ->join('lokers', 'applies.loker_id', '=', 'lokers.id')
                ->where('applies.employe_id',$employeId)
                ->where('applies.status',$verivikasi)
                ->get();

        $candidat = Apply::select('users.name as user_name', 'lokers.bagian', 'lokers.nama_pekerjaan', 'applies.created_at', 'applies.id as id', 'applies.loker_id as loker_id', 'lokers.nama_pekerjaan as job_name', 'lokers.bagian as job_position',)
                ->join('users', 'applies.user_id', '=', 'users.id')
                ->join('lokers', 'applies.loker_id', '=', 'lokers.id')
                ->where('applies.employe_id',$employeId)
                ->where('applies.status',$terima)
                ->get();

        $rejected= Apply::select('users.name as user_name', 'lokers.bagian', 'lokers.nama_pekerjaan', 'applies.created_at', 'applies.id as id', 'applies.loker_id as loker_id', 'lokers.nama_pekerjaan as job_name', 'lokers.bagian as job_position',)
                ->join('users', 'applies.user_id', '=', 'users.id')
                ->join('lokers', 'applies.loker_id', '=', 'lokers.id')
                ->where('applies.employe_id',$employeId)
                ->where('applies.status',$tolak)
                ->get();





    
        // $applies = Apply::select('users.name as user_name', 'lokers.id', 'lokers.nama_pekerjaan', 'apply.created_at')
        //         ->join('users', 'apply.user_id', '=', 'users.id')
        //         ->join('lokers', 'apply.loker_id', '=', 'lokers.id')
        //         ->get();
                // $lokerId = Loker::find($id);
                // $jumlahPelamarLoker = Apply::where('loker_id', $lokerId)->count();
        // Tampilkan view untuk mengedit profil
        return view('employer.employer-dashboard', compact('employE','applies','candidat','rejected'));
    }

    public function update(Request $request, $id)
    {

        $employeId = Auth::id();
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