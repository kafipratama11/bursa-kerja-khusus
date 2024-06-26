<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\loker;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function apply(){
        return view('user/apply');
    }
    
    public function about(){
        return view('about');
    }
    
    public function company_list(){
        $data = Employe::withCount('loker')->get();

        return view('company-list',compact('data'));
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
}