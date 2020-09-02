<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $fillable = [
    	'id',
    	'name',
    	'address',
    	'phone',
    	'email',
    	'created_at',
    	'updated_at'
    ];

    // protected $guarded = [];

    public function account() {
        return $this->hasOne(Account::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function getNameAttribute($name) {
        return strtoupper($name);
    }

    public function setNameAttribute($name) {
        $this->attributes['name'] = strtolower($name);
    }
}
