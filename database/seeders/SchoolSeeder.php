<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        School::create([
            'schoolid' => 3,
            'schoolfullname' => 'School of Business and Management',
            'schoolshortname' => 'SBM',
        ]);
        School::create([
            'schoolid' => 6,
            'schoolfullname' => 'School of Arts and Sciences',
            'schoolshortname' => 'SAS',
        ]);
        School::create([
            'schoolid' => 4,
            'schoolfullname' => 'School of Engineering',
            'schoolshortname' => 'SoENG',
        ]);
        School::create([
            'schoolid' => 5,
            'schoolfullname' => 'School of Education',
            'schoolshortname' => 'SED',
        ]);
        School::create([
            'schoolid' => 11,
            'schoolfullname' => 'School of Computer Studies',
            'schoolshortname' => 'SCS',
        ]);
        School::create([
            'schoolid' => 20,
            'schoolfullname' => 'School of Allied Medical Sciences',
            'schoolshortname' => 'SAMS',
        ]);
    }
}
