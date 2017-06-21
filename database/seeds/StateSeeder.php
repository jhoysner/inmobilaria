<?php

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')->insert([
            'name' => "Activo",
        ]);
        DB::table('state')->insert([
            'name' => "Inactivo",
        ]);
        DB::table('state')->insert([
            'name' => "En revision",
        ]);
    }
}
