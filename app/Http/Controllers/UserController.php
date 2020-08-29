<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct() {

	}

    public function regexId($id = 1998) {
    	echo "ID = $id";
    }

    public function demoMiddleware() {
    	echo "Demo middleware<br>";
    }

    public function demoTerminateMiddleware() {
    	echo "Demo terminate middleware.<br>";
    }
}
