<?php

use Illuminate\Database\Seeder;

class developerSeeder extends Seeder
{
    /**
     * Set default login details
     */

    public function __construct()
    {
        $this->name = 'Mr Developer';
        $this->email = 'developer@alacrityfoundation.com';
        $this->username = 'MrDeveloper';
        $this->password = Hash::make(123);

        $this->skill_name = 'PHP';
    }

    /**
    * Create one developer account
    * @return void
    */
   
   	public function run(){

		$user = factory(App\User::class)->create(['name' => $this->name, 'email' => $this->email,
        'username' => $this->username, 'password' => $this->password]);
	    $user->skills()->save(factory(App\Skill::class)->make(['skill_name' => $this->skill_name]));
        // $user->messages()->save(factory(App\Message::class)->make(['message' => 'This is a messgage from a developer']));

	    // Used for Entrust
	    //
	    // $developer = new App\Role();
	    // $developer->name = 'Developer';
	    // $developer->save();
	 
	    // $read = new App\Permission();
	    // $read->name = 'can_read_jobs';
	    // $read->display_name = 'Can Read Jobs';
	    // $read->save();
	 
	    // $developer->attachPermission($read);
	 
	    // $user = App\User::find(1);
	 
	    // $user->attachRole($developer);
	    
	}

}