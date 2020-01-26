<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new App\Role();
        $role->name = 'User';
        $role->description = 'A user';
        $role->save();

        $role = new App\Role();
        $role->name = 'Admin';
        $role->description = 'A Admin';
        $role->save();

        $role = new App\Role();
        $role->name = 'Administrator';
        $role->description = 'A Adminstrator';
        $role->save();
    }
}
