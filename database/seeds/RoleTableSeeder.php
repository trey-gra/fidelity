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
        //
        $role = new \App\role([
        	'desc' => 'Administrator'
        	]);
        $role->save();
        $role = new \App\role([
        	'desc' => 'Super User'
        	]);
        $role->save();
        $role = new \App\role([
        	'desc' => 'User'
        	]);
        $role->save();
    }
}
