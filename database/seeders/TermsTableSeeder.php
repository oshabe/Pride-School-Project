<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // For using query builder

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Using query builder
         DB::table('terms')->insert([

            //year 2022
            [
                'term' => 'Term one',
                'date' => '2022-02-18',
                'status' => 'inactive',
                'updated_by' => 'Developer',
            ],
            [
                'term' => 'Term two',
                'date' => '2022-04-22',
                'status' => 'inactive',
                'updated_by' => 'Developer',
            ],
            [
                'term' => 'Term three',
                'date' => '2022-08-13',
                'status' => 'inactive',
                'updated_by' => 'Developer', 
            ],

            //year 2023
            [
                'term' => 'Term one',
                'date' => '2023-02-18',
                'status' => 'inactive',
                'updated_by' => 'Developer',
            ],
            [
                'term' => 'Term two',
                'date' => '2023-04-22',
                'status' => 'inactive',
                'updated_by' => 'Developer',
            ],
            [
                'term' => 'Term three',
                'date' => '2023-08-13',
                'status' => 'inactive',
                'updated_by' => 'Developer', 
            ],

            //year four

            [
                'term' => 'Term one',
                'date' => '2024-02-18',
                'status' => 'inactive',
                'updated_by' => 'Developer',
            ],
            [
                'term' => 'Term two',
                'date' => '2024-04-22',
                'status' => 'Active',
                'updated_by' => 'Developer',
            ],
        ]);

        // Using Eloquent model factory (if you have a Term model factory)
        // Term::factory()->count(5)->create();
    }
}
