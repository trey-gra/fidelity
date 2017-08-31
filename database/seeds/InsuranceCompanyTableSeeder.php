<?php

use Illuminate\Database\Seeder;

class InsuranceCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ins = new \App\ins_company(['name'=>'Advantage General Insurance Company (AGIC)']);
        $ins->save(); 
        $ins = new \App\ins_company(['name'=>'British Caribbean Insurance Company (BCIC)']);
        $ins->save(); 
        $ins = new \App\ins_company(['name'=>'JN General Insurance (JNGI)']);
        $ins->save(); 
        $ins = new \App\ins_company(['name'=>'General Accident (GA)']);
        $ins->save(); 
        $ins = new \App\ins_company(['name'=>'Insurance Association of Jamaica (IAJ)']);
        $ins->save(); 
        $ins = new \App\ins_company(['name'=>'Insurance Company of the West Indies (ICWI)']);
        $ins->save();
    }
}
