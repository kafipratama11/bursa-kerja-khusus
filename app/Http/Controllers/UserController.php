<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Employe;
use App\Models\loker;
use App\Models\Profile;
use App\Models\ProfileUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function apply(){
        return view('user/apply');
    }
    
    public function about(){
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        return view('about', compact('dataU'));
    }
    
    public function company_list(){
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        $data = Employe::withCount('loker')->get();

        return view('company-list',compact('data','dataU'));
    }
    
    public function profile_employer(Request $request, $id){
        $data = Employe::find($id);
        $data->load('loker');
        $loker = $data->Loker; 
        return view('employer.profile-perusahaan',compact('data','loker'));
    }
    
    public function employerEditProfile(){
        return view('employer/employer-edit-profile');
    }
    
    public function employerIndex(){
        return view('employer/employer-index');
    }

    public function delete_employe(Request $request, $id){
        $data = Employe::find($id);

        if($data){
            $data->delete();
            return redirect()->route('user.index-user')->with('successdel' ,'oke');
        }
    }
    public function delete_loker(Request $request, $id){
        $data = Loker::find($id);

        if($data){
            $data->delete();
            return redirect()->back()->with('successdel' ,'oke');
        }
    }

    public function edit_role(Request $request,$id){

        $employe = Employe::find($id);
        $role = Role::where('guard_name' , 'employe')->get();
    
        return view('admin.edit-role-employer', compact('employe','role'));
    }

    public function update_role(Request $request, $id){
        $employe = Employe::find($id);

        $data['role']  = $request->role;

        $employe->syncRoles([$data]);
        return redirect()->back();
    }

    public function user_profile(Request $request, $id){
        $dataU = User::find($id);
        $dataU->load('profile_user');
        $dataU->load('education');
        

        return view('user.user-profile',compact('dataU'));
    }

    public function update_provinsi( Request $request, $id){
        $provinsi['provinsi'] = $request->provinsi;
        ProfileUser::where('user_id', $id)->update($provinsi);

        return redirect()->back();
    }

    public function update_about( Request $request, $id){
        $about['about'] = $request->about;
        ProfileUser::where('user_id', $id)->update($about);

        return redirect()->back();
    }

    public function update_contact( Request $request, $id){
        $contact['email'] = $request->email;
        $contact['no_telp'] = $request->no_telp;
        ProfileUser::where('user_id', $id)->update($contact);

        return redirect()->back();
    }

    public function add_education( Request $request,$id){
        $education['user_id']      = $request->user_id;
        $education['nama_sekolah'] = $request->nama_sekolah;
        $education['jurusan']      = $request->jurusan;
        $education['tahun']        = $request->tahun;
        Education::where('user_id', $id)->create($education);
        return redirect()->back();

    }

    public function detail_loker(Request $request, $id){

        $data = Loker::find($id);
        $ganjil = Loker::whereRaw('id % 2 != 0')->get();
        $genap = Loker::whereRaw('id % 2 = 0')->get();

        return view('admin.employer-detail-loker',compact('data'));
    }

    public function update_education(Request $request, $id){
        $education['nama_sekolah']   = $request->nama_sekolah;
        $education['jurusan']        = $request->jurusan;
        $education['tahun']          = $request->tahun;

        Education::where('id', $id)->update($education);

        return redirect()->back();
    }

    public function photo_profile(Request $request, $id){

        $photo      = $request->file('photo');
        $filename   = date('y-m-d').$photo->getClientOriginalName();
        $path       ='photo-user/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($photo));

        $data['image'] = $filename;

        ProfileUser::where('user_id', $id)->update($data);
        return redirect()->back();
    }
}