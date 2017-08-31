<?php

use Illuminate\Database\Seeder;

class VehicleMakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $make = new \App\veh_make(['make' => 'Audi']); 
        $make->save();
        $make = new \App\veh_make(['make' => 'BMW']); 
        $make->save();
        $make = new \App\veh_make(['make' => 'Ford']); 
        $make->save();
        $make = new \App\veh_make(['make' => 'Hyundai']); 
        $make->save();
        $make = new \App\veh_make(['make' => 'Honda']); 
        $make->save();
        $make = new \App\veh_make(['make' => 'Nissan']); 
        $make->save();
    }
}
