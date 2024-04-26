<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Employe;
use App\Models\Experience;
use App\Models\HardSkill;
use App\Models\Jurusan;
use App\Models\Apply;
use App\Models\loker;
use App\Models\Profile;
use App\Models\ProfileUser;
use App\Models\SoftSkill;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
// use Illuminate\Support\Facades\db_bkk;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    public function search(Request $request){
        $data = $request->input('search');
        $provinsi = $request->input('provinsi');
        $jurusan = $request->input('jurusan');
        $user = User::role('user')->count();
        $employe = Employe::count();
        $loker = Loker::count();
        $jurusan = Jurusan::all();
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();


        $data = Loker::where('nama_pekerjaan', 'like', '%'.$data.'%')
                        ->orWhere('bagian', 'like', '%'.$data.'%')
                        ->orWhere('jurusan', 'like', '%'.$jurusan.'%')
                        ->orWhere('provinsi', 'like', '%'.$provinsi.'%')
                        ->get();

        return view('index',compact('data','loker','user','employe','dataU','jurusan'));
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
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        return view('employer.profile-perusahaan',compact('data','loker','dataU'));
    }

    public function profile_employe(Request $request, $id){
        $data = Employe::find($id);
        $data->load('loker');
        $loker = $data->Loker; 
        $profile = Auth::id();
        $dataU = User::where('id', $profile)->first();
        return view('admin.employer-profile',compact('data','loker','dataU'));
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
        $data = loker::find($id);
        $loker = loker::find($id);
        $apply = Apply::find($id);
        $dataU = User::find($id);
        $dataU->load('profile_user');
        $dataU->load('education');
        $dataU->load('experiences');
        $dataU->load('softskill');
        $dataU->load('hardskill');
        $dataU->load('apply');
        
        $history = Apply::select('employes.name as nama_perusahaan', 'employes.image as image', 'lokers.nama_pekerjaan as nama_loker', 'applies.created_at as waktu', 'lokers.id as id', 'applies.id as apply_id','applies.status')
        ->join('users', 'applies.user_id', '=', 'users.id')
        ->join('lokers', 'applies.loker_id', '=', 'lokers.id')
        ->join('employes', 'lokers.employe_id', '=', 'employes.id')
        ->where('users.nisn', $dataU->nisn)
        ->get();

        $applyId = 78; // Ganti dengan ID apply tertentu yang Anda inginkan



    //     $history = Apply::select('apply.id as apply_id', 'employes.name as nama_perusahaan', 'employes.image as image', 'lokers.nama_pekerjaan as nama_loker', 'apply.created_at as waktu', 'lokers.id as loker_id')
    // ->join('users', 'apply.user_id', '=', 'users.id')
    // ->join('lokers', 'apply.loker_id', '=', 'lokers.id')
    // ->join('employes', 'lokers.employe_id', '=', 'employes.id')
    // ->where('users.nisn', $dataU->nisn)
    // ->get();

    
        $user = User::role('user')->count();
        $user = auth()->user()->role;
        $userId = Auth::id();
    
        // Dapatkan riwayat lamaran pengguna
        $applyHistory = Apply::where('user_id', $userId)->get();
        
        return view('user.user-profile',compact('dataU','user','data', 'applyHistory','history'));
    }

    public function update_provinsi( Request $request, $id){
        $provinsi['provinsi'] = $request->provinsi;
        $provinsi['kota'] = $request->kota;
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
        $applyId = Apply::find($id);

        $candidat = User::select('users.name', 'profile_user.*')
        ->join('applies', 'users.id', '=', 'applies.user_id')
        ->join('profile_user', 'users.id', '=', 'profile_user.user_id')
        ->where('applies.loker_id', $applyId)
        ->distinct()
        ->get();

        return view('admin.detail-loker',compact('data','candidat'));
    }

    public function update_education(Request $request, $id){
        $education['nama_sekolah']   = $request->nama_sekolah;
        $education['jurusan']        = $request->jurusan;
        $education['tahun']          = $request->tahun;

        Education::where('id', $id)->update($education);

        return redirect()->back();
    }

    public function photo_profile(Request $request, $id)
    {
    // Validasi request
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan kebutuhan
    ]);

    // Mendapatkan file foto dari request
    $photo = $request->file('photo');

    // Membuat nama file unik dengan menambahkan timestamp
    $filename = date('y-m-d_H-i-s') . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();

    // Menyimpan file foto ke dalam direktori storage
    $path = 'photo-user/' . $filename;
    Storage::disk('public')->put($path, file_get_contents($photo));

    // Menyimpan nama file foto ke dalam database
    $data['image'] = $filename;
    ProfileUser::where('user_id', $id)->update($data);

    // Redirect kembali
    return redirect()->back();
    }

    public function delete_education($id){
        $data = Education::find($id);

        if($data){
            $data->delete();
            return redirect()->back();
        }
    }

    public function delete(Request $request, $id){
        $data = User::find($id);

        if($data){
            $data->delete();
            return redirect()->back();
        }
    }

    public function add_experience(Request $request, $id){
        $data['user_id']            = $request->user_id;
        $data['nama_perusahaan']    = $request->nama_perusahaan;
        $data['nama_pekerjaan']     = $request->nama_pekerjaan;
        $data['status']             = $request->status;
        $data['lama_bekerja']       = $request->lama_bekerja;
        $data['deskripsi']          = $request->deskripsi;

        Experience::where('id',$id)->create($data);
        return redirect()->back()->with('successexp');
    }

    public function delete_experience($id){
        $experience = Experience::find($id);
    
        if($experience){
            $experience->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    

    public function update_experience(Request $request, $id){
        $data['user_id']            = $request->user_id;
        $data['nama_perusahaan']    = $request->nama_perusahaan;
        $data['nama_pekerjaan']     = $request->nama_pekerjaan;
        $data['status']             = $request->status;
        $data['lama_bekerja']       = $request->lama_bekerja;
        $data['deskripsi']          = $request->deskripsi;

        Experience::where('id',$id)->update($data);
        return redirect()->back();
    }

    public function add_softskill(Request $request, $id){
        $data['user_id']    =$request->user_id;
        $data['skill']    =$request->skill;

        SoftSkill::where('id',$id)->create($data);
        return redirect()->back()->with('Success', 'Softskill berhasil ditambahkan!');
    }

    public function delete_softskill($id){
        $data = SoftSkill::find($id);

        if($data){
            $data->delete();
            return redirect()->back();
        }
    }

    public function update_softskill( Request $request, $id){
        $data['skill'] = $request->skill;
        SoftSkill::where('id', $id)->update($data);

        return redirect()->back();
    }

    public function add_hardskill(Request $request, $id){
        $data['user_id']    =$request->user_id;
        $data['skill']    =$request->skill;

        HardSkill::where('id',$id)->create($data);
        return redirect()->back();
    }

    public function delete_hardskill($id){
        $data = HardSkill::find($id);

        if($data){
            $data->delete();
            return redirect()->back();
        }
    }

    public function update_hardskill( Request $request, $id){
        $data['skill'] = $request->skill;
        HardSkill::where('id', $id)->update($data);

        return redirect()->back();
    }
}