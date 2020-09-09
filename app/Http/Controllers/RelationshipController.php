<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\User;
use App\Product;
use App\Order;
use App\OrderProduct;
use DateTime;
use DB;

class RelationshipController extends Controller
{
    public function oneone() {
        echo "<h1>Account</h1>";
        $user = User::findOrFail(50);
        $account = $user->account;
        echo "$account->id<br>" . 
            "$account->user_id<br>" .
            "$account->username<br>" .
            "$account->password<br><br>"; 

        echo "<h1>User</h1>";
        $user = Account::findOrFail(100)->user;
        echo "$user->id<br>" .
            "$user->name<br>" .
            "$user->address<br>" .
            "$user->phone<br>" .
            "$user->email<br><br>"; 
    }

    public function onemany() {
        echo "<h1>User</h1>";
    	$user = Product::findOrFail(100)->user;
        echo "$user->id<br>" .
            "$user->name<br>" .
            "$user->address<br>" .
            "$user->phone<br>" .
            "$user->email<br><br>";

        echo "<h1>Product</h1>";
        $products = User::findOrFail(92)->products;
        foreach ($products as $product) {
            echo "$product->id<br>" .
                "$product->user_id<br>" .
                "$product->name<br>" .
                "$product->price<br>" .
                "$product->description<br>" .
                "$product->image_path<br>" .
                "$product->action<br><br>";
        }
    }

    public function manymany() {
        echo "<h1>Product</h1>";
        $products = Order::findOrFail(3)->products;
        foreach ($products as $product) {
            echo "$product->id<br>" .
                "$product->user_id<br>" .
                "$product->name<br>" .
                "$product->price<br>" .
                "$product->description<br>" .
                "$product->image_path<br>" .
                "$product->action<br><br>";
        }
        echo "<h1>Order</h1>";
        $orders = Product::findOrFail(2)->orders;
        foreach ($orders as $order) {
            echo "$order->id<br>" . 
                "$order->total<br>" . 
                "$order->created_at<br>" . 
                "$order->updated_at<br><br>"; 
        }

        echo "<h1>Order - Product</h1>";
        $order = Order::findOrFail(3);
        foreach ($order->products as $value) {
            echo $value->pivot->product_id . "<br>";
        }
    }
    	
}
