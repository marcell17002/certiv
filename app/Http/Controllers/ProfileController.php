<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;

class ProfileController extends Controller
{
    public function showProfileData(){
        $profileData = UserDetail::where('username', $username)->first();
    }
}
