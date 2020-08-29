<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoRequestController extends Controller
{
    public function request(Request $request) {
    	echo "URI: " . $request->path();
    	echo "<br>URL: " . $request->url();
    	echo "<br>Full URL: " . $request->fullUrl();
    	echo "<br>Method: " . $request->method();
    	echo "<br>IP: " . $request->ip();
    	echo "<br>Route Name: " . $request->route()->getName();	// value or NULL
    	echo "<br>Is: " . $request->is('request/*');			// true  or false
    }
}
