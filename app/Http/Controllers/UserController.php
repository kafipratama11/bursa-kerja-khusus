<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\loker;
use Illuminate\Http\Request;

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
}