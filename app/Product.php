<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'id',
        'user_id',
    	'name',
    	'price',
    	'description',
    	'image_path',
    	'created_at',
    	'updated_at'
    ];

    protected $touches = ['user'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
