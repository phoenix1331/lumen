<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
//Entrust for Roles
// use Zizaco\Entrust\Traits\EntrustUserTrait;

use App\Job;
use App\Role;
use App\Skill;
use App\Message;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    // Add in when Entrust is working >>> , EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'photo', 'password', 'profile_copy', 'username'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    protected $guarded = [];

      public function skills(){
        return $this->belongsToMany(Skill::class);
    }

     public function jobs(){
       return $this->belongsToMany(Job::class);
    }

     public function messages(){
       return $this->belongsToMany(Message::class);
    }

    // public function roles(){
    //     return $this->belongsToMany(Role::class);
    // }

    // public function getSkillListAttribute(){
    //     return $this->skills->lists('id')->all();
    // }
  
}
