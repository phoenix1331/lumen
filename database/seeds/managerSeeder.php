<?php

use Illuminate\Database\Seeder;

class managerSeeder extends Seeder
{

    /**
     * Set default login details
     */

    public function __construct()
    {
        //SET DEFAULT LOGIN DETAILS
        $this->name = 'Mr Manager';
        $this->email = 'manager@alacrityfoundation.com';
        $this->username = 'MrManager';
        $this->password = Hash::make(123);

        $this->job_name = 'Web Development';
        $this->job_price = '£300';
    }

    /**
    * Create one manager account
    * @return void
    */

    public function run(){

        $user = factory(App\User::class)->create(['name' => $this->name, 'email' => $this->email,
        'username' => $this->username, 'password' => $this->password]);
        $user->jobs()->save(factory(App\Job::class)->make(['name' => $this->job_name, 'price' => $this->job_price]));
        $user->jobs()->save(factory(App\Job::class)->make(['name' => $this->job_name, 'price' => $this->job_price]));
        // $user->messages()->save(factory(App\Message::class)->make(['message' => 'This is a messgage from a manager']));
        
        // Used for Entrust
        // 
        // $manager = new App\Role();
        // $manager->name = 'Manager';
        // $manager->save();

        // $prof = new App\Permission();
        // $prof->name = 'can_read_profiles';
        // $prof->display_name = 'Can Read Profiles';
        // $prof->save();

        // $read = App\Permission::find(1);

        // $edit = new App\Permission();
        // $edit->name = 'can_edit_jobs';
        // $edit->display_name = 'Can Edit Jobs';
        // $edit->save();

        // $manager->attachPermission($prof);
        // $manager->attachPermission($read);
        // $manager->attachPermission($edit);    

        // $user = App\User::find(2);
     
        // $user->attachRole($manager);

    }

}