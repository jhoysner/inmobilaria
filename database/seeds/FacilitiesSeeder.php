<?php

use Illuminate\Database\Seeder;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            'name' => "Edificio con ascensor",
        ]);
        DB::table('facilities')->insert([
            'name' => "Piscina",
        ]);
        DB::table('facilities')->insert([
            'name' => "Estacionamiento",
        ]);
        DB::table('facilities')->insert([
            'name' => "Cocina",
        ]);
        DB::table('facilities')->insert([
            'name' => "Aire acondicionado",
        ]);
        DB::table('facilities')->insert([
            'name' => "Calefacción",
        ]);
    }
}
