<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Message;

class Job extends Model
{
  protected $guarded = [];

	public function users(){
		return $this->belongsToMany(User::class);
	}

	public function messages(){
		return $this->belongsToMany(Message::class);
	}
}
