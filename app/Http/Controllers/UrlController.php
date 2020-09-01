<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function demo() {
    	// echo url()->current();
    	echo url()->previous();
    }
}
