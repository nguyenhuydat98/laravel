<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DemoResponseController extends Controller
{
    public function demo() {
    	return ['Dat', 'Tien', 'Thinh'];
    }

    public function header() {
    	return response("<h1>Response to Header</h1>", 200)
    		->header('Content-Type', 'text/html');
    }

    public function view() {
    	return view('welcome');
    }

    public function json() {
    	return view('response')->json([
    		'name' => 'datnh',
    		'born' => '9x'
    	]);
    }

    public function download() {
    	return response()->download('../resources/views/welcome.blade.php', 'test.php');
    }

    public function file() {
    	return response()->file('../public/.htaccess');
    }
}
