<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class EagerLoadingController extends Controller
{
    public function eagerLoading() {
    	$users = User::with(['products', function($query) {
    		$query->orderBy('image_path');
    	}])->get();

    	foreach ($users as $user) {
    		echo $user->name . "<br>";
    		echo "-------------------------------------<br>";

    		// $products = $user->products;
    		// foreach ($products as $product) {
    		// 	echo "$product->id<br>" . "$product->name<br>" . "$product->price<br><br>"; 
    		// }
    	}
    }
}
