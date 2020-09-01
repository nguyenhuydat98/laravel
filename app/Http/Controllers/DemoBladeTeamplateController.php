<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoBladeTeamplateController extends Controller
{
    public function basic() {
    	return view('child');
    }
}
