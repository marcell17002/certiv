<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\UserDetail;
use App\User;

class ProfileController extends Controller
{
    public function showProfileData($username){
        $user = Auth::user();
        $userDetails = UserDetail::where('user_id', $user->id)->first();

        return view('profile',
         [
            'userDetails' => $userDetails,
            'user' => $user,
         ]);
    }
}
