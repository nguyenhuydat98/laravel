<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MuratorsController extends Controller
{
    public function murators() {
    	$user = User::find(1);
    	$user->name = "DatNH";
    	$user->save();
    }
}
