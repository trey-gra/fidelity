<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = new \App\User([
        	'first_name' => 'Paul',
        	'last_name' => 'Francis',
        	'role_id' => 1,
        	'email' => 'francisp@yahoo.com',
        	'password' => Hash::make('P@$$w0rd')
        	]);
        $users->save();
        $users = new \App\User([
        	'first_name' => 'Orane',
        	'last_name' => 'Walker',
        	'role_id' => 2,
        	'email' => 'walkerogmail.com',
        	'password' => Hash::make('P@$$w0rd')
        	]);
        $users->save();
        $users = new \App\User([
        	'first_name' => 'Charmain',
        	'last_name' => 'Green',
        	'role_id' => 2,
        	'email' => 'cgreen@yahoo.com',
        	'password' => Hash::make('P@$$w0rd')
        	]);
        $users->save();
        $users = new \App\User([
        	'first_name' => 'Janet',
        	'last_name' => 'Hemingsworth',
        	'role_id' => 2,
        	'email' => 'janethem21@regular.com',
        	'password' => Hash::make('P@$$w0rd')
        	]);
        $users->save();
        $users = new \App\User([
        	'first_name' => 'Owayne',
        	'last_name' => 'Clarke',
        	'role_id' => 1,
        	'email' => 'clarkeo@yahoo.com',
        	'password' => Hash::make('P@$$w0rd')
        	]);
        $users->save();
    }
}
