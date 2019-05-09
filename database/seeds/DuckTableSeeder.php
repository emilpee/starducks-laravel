<?php

use Illuminate\Database\Seeder;

class DuckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'firstName' => str_random(10),
            'lastName' => str_random(10),
            'email' => str_random(20),
            'department' => randomElement($array = array('Kaffe', 'HR', 'Konflikthantering', 'Kampanj', 'Slaveri')),
            'salary' => rand(15000, 35000)
        ]);
    }
}
