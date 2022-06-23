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
        $zones = CampZone::get();

        return view('home', [
            'user' => $user, // this variable is used in home.blade.php
            'zones' => $zones,
        ]);
    }

    public function get_zone($zone_id)
    {
        $zone = CampZone::find($zone_id);

        return view('home', [
            'zone' => $zone,
        ]);
    }
}
