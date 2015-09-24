<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Skill extends Model
{
   protected $guarded = [];

	  public function users(){
		return $this->belongsToMany(User::class);
	}
}
