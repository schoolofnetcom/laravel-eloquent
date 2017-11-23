<?php

use Illuminate\Database\Seeder;

class SoccerTeamsTableSeeder extends Seeder
{
    const MAX_ROWS = 100;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\SoccerTeam::class,self::MAX_ROWS)->create();
    }
}
