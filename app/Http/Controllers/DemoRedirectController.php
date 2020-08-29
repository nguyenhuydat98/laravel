<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoRedirectController extends Controller
{
    public function uri() {
    	return redirect('request');
    }

    public function route() {
    	return redirect()->route('DemoRequest');
    }

    public function action() {
    	return redirect()->action('UserController@demoMiddleware');
    }

    public function domain() {
    	return redirect()->away('https://youtube.com');
    }
}
