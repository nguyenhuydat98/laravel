<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Image;

class PolymorphicController extends Controller
{
    public function onetoone() {
    	$user = User::findOrFail(10);
    	$image = $user->image;
    	// dd($user);

    	$image = Image::findOrFail(150);
    	$imageable = $image->imageable;
    	dd($image);
    }
}
