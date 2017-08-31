<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(RoleTableSeeder::class);
        //$this->call(ParishTableSeeder::class);
        //$this->call(VehicleMakeTableSeeder::class);
        //$this->call(VehicleModelTableSeeder::class);
        //$this->call(OccupationTableSeeder::class);
        $this->call(InsuranceCompanyTableSeeder::class);
        //$this->call(ParishTableSeeder::class);

    }
}
