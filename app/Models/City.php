<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


	public function state()
	{
		return $this->belongsTo(State::class, 'subadmin1_code', 'code');
		//return $this->hasMany(State::class, 'subadmin1_code', 'code');
		//return $this->hasMany(Post::class);
	}

}
