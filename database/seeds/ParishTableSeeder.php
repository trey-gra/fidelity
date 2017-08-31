<?php

use Illuminate\Database\Seeder;

class ParishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $parish = new \App\parish([
        	'name' => 'Kingston'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'Hanover'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'Trelawny'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'St. James'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'St. Ann'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'St. Mary'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'Portland'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'Westmoreland'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'St. Elizabeth'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'Clarendon'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'Manchester'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'St. Catherine'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'St. Thomas'
        	]);
        $parish->save();$parish = new \App\parish([
        	'name' => 'St. Andrew'
        	]);
        $parish->save();
    }
}
