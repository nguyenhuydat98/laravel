<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'id',
    	'url',
    	'imageable_id',
    	'imageable_name',
    ];

    public function imageable() {
    	return $this->morphTo();
    }
}
