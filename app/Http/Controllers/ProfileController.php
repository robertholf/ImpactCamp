<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CampZone;

class ProfileController extends Controller
{
    public function index($user)
    {
        $user = User::find($user); // this how you take a variable from Models\User.php
        return view('home', [
            'user' => $user, // this variable is used in home.blade.php
        ]);
    }

    public function get_zone($zone)
    {
        $zone = CampZone::find($zone);
        return view('home', [
            'zone' => $zone,
        ]);
    }
}
