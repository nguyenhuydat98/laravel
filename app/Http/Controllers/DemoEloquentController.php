<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DemoEloquentController extends Controller
{
    public function getAll() {
    	$users = User::all();
    	foreach ($users as $user) {
    		echo "$user->id<br>" .
    			"$user->username<br>" .
    			"$user->password<br>" .
    			"$user->email<br><br>"; 
    	}
    }

    public function get() {
    	$users = User::where('id', '<=', 50)
    		->orderBy('username')
    		->get();

    	foreach ($users as $user) {
    		echo "$user->id<br>" .
    			"$user->username<br>" .
    			"$user->password<br>" .
    			"$user->email<br><br>"; 
    	}
    }

    public function chunk() {
    	$users = User::all();
    	User::chunk(50, function($users){
    		foreach ($users as $user) {
	    		echo "$user->id<br>" .
	    			"$user->username<br>" .
	    			"$user->password<br>" .
	    			"$user->email<br><br>"; 
	    	}
	    	echo "<h1>End Chunk</h1>";
    	});
    }

    public function search($id = 100) {
    	$user = User::find($_GET['id']);
    	echo "$user->id<br>" .
			"$user->username<br>" .
			"$user->password<br>" .
			"$user->email<br><br>"; 
    }

    public function insert() {
        User::insert([
            'username'   => 'admin',
            'password'   => 'abcd1234',
            'email'      => 'datnh@gmail.com'
        ]);
        echo "Insert";
    }

    public function update() {
        User::where('id', '100')->update([
            'username' => 'ahihi',
            'password' => '^^change'
        ]);
    }

    public function delete() {
        // User::where('id', '11')->delete();
        $users = User::onlyTrashed()->get();
        foreach ($users as $user) {
            echo "$user->id<br>" .
                "$user->username<br>" .
                "$user->password<br>" .
                "$user->email<br><br>"; 
        }
    }

    public function restore() {
        User::withTrashed()
            ->where('id', 1)
            ->restore();
    }

    public function forceDelete() {
        User::where('id', 2)->forceDelete();
    }
}
