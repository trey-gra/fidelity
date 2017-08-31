<?php

use Illuminate\Database\Seeder;

class OccupationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $occ = new \App\occupation([
        	'desc' => 'Baker'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Farmer'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Hairdresser'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Mason'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Police'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Butcher'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Fireman'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Journalist'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Mechanic'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Carpenter'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Fisherman'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Judge'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Painter'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Secretary'
        	]);
        $occ->save();$occ = new \App\occupation([
        	'desc' => 'Unemployed'
        	]);
        $occ->save();
    }
}
