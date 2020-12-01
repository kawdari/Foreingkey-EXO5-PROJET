<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('countries')->insert(
            [
                [
                    'pays' => 'Belgique',
                    'continent' => 'Europe',
                ],
                [
                    'pays' => 'Nicolas',
                    'continent' => 'Europe',
                ],
                [
                    'pays' => 'Hollande',
                    'continent' => 'Europe',
                ],
                [
                    'pays' => 'Angleterre',
                    'continent' => 'Europe',
                ],
                [
                    'pays' => 'Suisse',
                    'continent' => 'Europe',
                ],
                [
                    'pays' => 'Allemagne',
                    'continent' => 'Europe',
                ],
                [
                    'pays' => 'USA',
                    'continent' => 'hors-europe',
                ],
                [
                    'pays' => 'Canada',
                    'continent' => 'hors-europe',
                ],
                [
                    'pays' => 'Australie',
                    'continent' => 'hors-europe',
                ],
                [
                    'pays' => 'Japon',
                    'continent' => 'hors-europe',
                ],
            ]
        );
    
    }
}
