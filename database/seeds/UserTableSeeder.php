<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role_user = Role::where('name', 'User')->get();
        $role_admin = Role::where('name', 'Admin')->get();
        $role_admini = Role::where('name', 'Administrator')->get();

        $user = new User();
        $user->name = 'Sajid';
        $user->email = 'sajid@gmail.com';
        $user->password = Hash::make('sajidansari');
        $user->save();
        $user->roles()->attach($role_user);


        $user = new User();
        $user->name = 'Rahul';
        $user->email = 'sajid22@gmail.com';
        $user->password = Hash::make('sajidansari');
        $user->save();
        $user->roles()->attach($role_admin);



        $user = new User();
        $user->name = 'Ram';
        $user->email = 'sajid223@gmail.com';
        $user->password = Hash::make('sajidansari');
        $user->save();
        $user->roles()->attach($role_admini);
    }
}
