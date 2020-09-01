<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
    	'id',
        'user_id',
    	'username',
    	'password',
    	'created_at',
    	'updated_at'
    ];

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
