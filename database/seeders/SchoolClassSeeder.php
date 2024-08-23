<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // For using query builder
use App\Models\Term;

class SchoolClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $termOne = Term::where('term', 'Term one')->first();
        // Using query builder
        DB::table('school_classes')->insert([
            [
                'name' => 'Primary One',
                'status' => 'Active',
                'created_by'=>'Developer',
            ],
            [
                'name' => 'Primary Two',
                'status' => 'Active',
                'created_by'=>'Developer',
            ],
            [
                'name' => 'Primary Three',
                'status' => 'Active',
                'created_by'=>'Developer',
            ],
            [
                'name' => 'Primary Four',
                'status' => 'Active',
                'created_by'=>'Developer',
            ],
            [
                'name' => 'Primary Five',
                'status' => 'Active',
                'created_by'=>'Developer',
            ],
            [
                'name' => 'Primary Six',
                'status' => 'Active',
                'created_by'=>'Developer',
            ],
            [
                'name' => 'Primary Seven',
                'status' => 'Active',
                'created_by'=>'Developer',
            ],
        ]);
    }
}
