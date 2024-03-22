<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function kode_loker(){
        return view('employer.employer-detail-loker');
    }
}
