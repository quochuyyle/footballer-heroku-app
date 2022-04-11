<?php

namespace Database\Seeders;

use App\Models\Footballer;
use Illuminate\Database\Seeder;

class FootballersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //This resets the table, deleting all the data everytime the function is called.
        Footballer::truncate();
        Footballer::create([
            'name' => 'Sadio Mane',
            'position' => 'Winger',
        ]);
        Footballer::create([
            'name' => 'Oxlade Chamberlain',
            'position' => 'Midfielder',
        ]);
        Footballer::create([
            'name' => 'Virgil Van Dijk',
            'position' => 'Defender',
        ]);
        Footballer::create([
            'name' => 'Allison Becker',
            'position' => 'Goalkeeper',
        ]);
    }
}
