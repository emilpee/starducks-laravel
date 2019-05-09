<?php

use Illuminate\Database\Seeder;
use App\Starduck;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Starduck::class, 198)->create();
    }
}
