<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccessorsController extends Controller
{
    public function accessors() {
    	$user = User::findOrFail(2);
    	echo $user->name;
    }
}
