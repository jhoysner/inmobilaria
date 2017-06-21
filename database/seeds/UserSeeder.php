<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "jcorona",
            'email' => "jcorona@hotmail.com",
            'password' => bcrypt('123456'),
        ]);
    }
}
