<?php

use Illuminate\Database\Seeder;

class VehicleModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $model = new \App\veh_model_detail(['make_id' => 6, 'model' => 'Sunny']);
        $model->save();
        $model = new \App\veh_model_detail(['make_id' => 6, 'model' => 'Pulsar']);
        $model->save();
        $model = new \App\veh_model_detail(['make_id' => 5, 'model' => 'Civic']);
        $model->save();
        $model = new \App\veh_model_detail(['make_id' => 5, 'model' => 'Accord']);
        $model->save();
    }
}
