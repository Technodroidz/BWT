<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::create([
        	'name'=>'student',
        	'slug'=>'student',
        	'description'=>'Student Role'
        ]);
        $role=Role::create([
        	'name'=>'admin',
        	'slug'=>'admin',
        	'description'=>'Admin'
        ]);
        $user=User::create([
        	'name'=>'Admin',
        	'email'=>'admin@admin.com',
        	'mobile'=>'123456789',
        	'password'=>bcrypt('password'),
        	'role_id'=>$role->id
        ]);
    }
}
