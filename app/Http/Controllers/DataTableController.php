<?php

namespace App\Http\Controllers;

use App\Models\loker;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function search(Request $request){

        $data = new loker();

        if($request->get('search')){
            $data = $data->where('name','LIKE','%'.$request->get('search').'%')
            ->orWhere('email','LIKE','%'.$request->get('search').'%');
        }

        if($request->get('tanggal')){
            $data = $data->where('name','LIKE','%'.$request->get('search').'%')
            ->orWhere('email','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('index',compact('data','request'));
    }
}
