<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Certification;

class CertificationController extends Controller
{
    public function index(){
        $certifications = Certification::all();
        return view('certification', ['certifications' => $certifications]);
    }
}
