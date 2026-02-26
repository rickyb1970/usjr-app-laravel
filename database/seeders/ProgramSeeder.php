<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       Program::create([
            'progid' => 33001001,
            'progfullname' => 'Bachelor of Science in Accountancy',
            'progshortname' => 'BSA',
            'progschoolid' => 3,
            'progschooldeptid' => 3001,
        ]);
        Program::create([
            'progid' => 33001002,
            'progfullname' => 'Bachelor of Science in Management Accounting',
            'progshortname' => 'BSMA',
            'progschoolid' => 3,
            'progschooldeptid' => 3001,
        ]);
        Program::create([
            'progid' => 33001003,
            'progfullname' => 'Bachelor of Science in Business Administration Major in Finanacial Management',
            'progshortname' => 'BSBA-FM',
            'progschoolid' => 3,
            'progschooldeptid' => 3001,
        ]);
        Program::create([
            'progid' => 33002001,
            'progfullname' => 'Bachelor of Science in Entrepreneurship',
            'progshortname' => 'BS-Entrepreneurship',
            'progschoolid' => 3,
            'progschooldeptid' => 3002,
        ]);
        Program::create([
            'progid' => 33003001,
            'progfullname' => 'Bachelor of Science in Business Administration Major in Operation Management',
            'progshortname' => 'BSBA-OM',
            'progschoolid' => 3,
            'progschooldeptid' => 3003,
        ]);
        Program::create([
            'progid' => 33003002,
            'progfullname' => 'Bachelor of Science in Business Administration Major in Human Resource Development Management',
            'progshortname' => 'BSBA-HRDM',
            'progschoolid' => 3,
            'progschooldeptid' => 3003,
        ]);
        Program::create([
            'progid' => 33003003,
            'progfullname' => 'Bachelor of Science in Business Administration Major in Marketing Management',
            'progshortname' => 'BSBA-MM',
            'progschoolid' => 3,
            'progschooldeptid' => 3003,
        ]);
        Program::create([
            'progid' => 33004001,
            'progfullname' => 'Bachelor of Science in Hospitality Management',
            'progshortname' => 'BSHM',
            'progschoolid' => 3,
            'progschooldeptid' => 3004,
        ]);
        Program::create([
            'progid' => 33004002,
            'progfullname' => 'Bachelor of Science in Hospitality Management Major in Food and Beverage',
            'progshortname' => 'BSHM-FB',
            'progschoolid' => 3,
            'progschooldeptid' => 3004,
        ]);
        Program::create([
            'progid' => 33004003,
            'progfullname' => 'Associate in Hospitality Management',
            'progshortname' => 'AHM',
            'progschoolid' => 3,
            'progschooldeptid' => 3004,
        ]);
        Program::create([
            'progid' => 33004004,
            'progfullname' => 'Associate in Tourism',
            'progshortname' => 'ATourism',
            'progschoolid' => 3,
            'progschooldeptid' => 3004,
        ]);
        Program::create([
            'progid' => 66001001,
            'progfullname' => 'Bachelor of Arts in Communication',
            'progshortname' => 'BAComm',
            'progschoolid' => 6,
            'progschooldeptid' => 6001,
        ]);
        Program::create([
            'progid' => 66001002,
            'progfullname' => 'Bachelor of Arts in English Language Studies',
            'progshortname' => 'BAELS',
            'progschoolid' => 6,
            'progschooldeptid' => 6001,
        ]);
        Program::create([
            'progid' => 66001003,
            'progfullname' => 'Bachelor of Arts in Journalism',
            'progshortname' => 'BAJournalism',
            'progschoolid' => 6,
            'progschooldeptid' => 6001,
        ]);
        Program::create([
            'progid' => 66001004,
            'progfullname' => 'Bachelor of Arts in Marketing Communication',
            'progshortname' => 'BAMarComm',
            'progschoolid' => 6,
            'progschooldeptid' => 6001,
        ]);
        Program::create([
            'progid' => 66002001,
            'progfullname' => 'Bachelor of Science in Biology Major in Medical Biology',
            'progshortname' => 'BSBio-MB',
            'progschoolid' => 6,
            'progschooldeptid' => 6002,
        ]);
        Program::create([
            'progid' => 66002002,
            'progfullname' => 'Bachelor of Science in Biology Major in Microbiology',
            'progshortname' => 'BSBio-Microbio',
            'progschoolid' => 6,
            'progschooldeptid' => 6002,
        ]);
        Program::create([
            'progid' => 66003001,
            'progfullname' => 'Bachelor of Arts in Political Science',
            'progshortname' => 'BAPolSci',
            'progschoolid' => 6,
            'progschooldeptid' => 6003,
        ]);
        Program::create([
            'progid' => 66003002,
            'progfullname' => 'Bachelor of Arts in International Studies',
            'progshortname' => 'BAIS',
            'progschoolid' => 6,
            'progschooldeptid' => 6003,
        ]);
        Program::create([
            'progid' => 66003003,
            'progfullname' => 'Bachelor of Arts in Philosophy',
            'progshortname' => 'BAPhilo',
            'progschoolid' => 6,
            'progschooldeptid' => 6003,
        ]);
        Program::create([
            'progid' => 66004001,
            'progfullname' => 'Bachelor of Science in Psychology',
            'progshortname' => 'BSPsych',
            'progschoolid' => 6,
            'progschooldeptid' => 6004,
        ]);
        Program::create([
            'progid' => 44001001,
            'progfullname' => 'Bachelor of Science in Civil Engineering',
            'progshortname' => 'BSCE',
            'progschoolid' => 4,
            'progschooldeptid' => 4001,
        ]);
        Program::create([
            'progid' => 44002001,
            'progfullname' => 'Bachelor of Science in Computer Engineering',
            'progshortname' => 'BSCpE',
            'progschoolid' => 4,
            'progschooldeptid' => 4002,
        ]);
        Program::create([
            'progid' => 44003001,
            'progfullname' => 'Bachelor of Science in Electronics and Communications Engineering',
            'progshortname' => 'BSECE',
            'progschoolid' => 4,
            'progschooldeptid' => 4003,
        ]);
        Program::create([
            'progid' => 44004001,
            'progfullname' => 'Bachelor of Science in Electrical Engineering',
            'progshortname' => 'BSEE',
            'progschoolid' => 4,
            'progschooldeptid' => 4004,
        ]);
        Program::create([
            'progid' => 44005001,
            'progfullname' => 'Bachelor of Science in Industrial Engineering',
            'progshortname' => 'BSIE',
            'progschoolid' => 4,
            'progschooldeptid' => 4005,
        ]);
        Program::create([
            'progid' => 44006001,
            'progfullname' => 'Bachelor of Science in Mechanical Engineering',
            'progshortname' => 'BSME',
            'progschoolid' => 4,
            'progschooldeptid' => 4006,
        ]);
        Program::create([
            'progid' => 55001001,
            'progfullname' => 'Bachelor of Elementary Education',
            'progshortname' => 'BEEEd',
            'progschoolid' => 5,
            'progschooldeptid' => 5001,
        ]);
        Program::create([
            'progid' => 55001002,
            'progfullname' => 'Bachelor of Early Childhood Education',
            'progshortname' => 'BECE',
            'progschoolid' => 5,
            'progschooldeptid' => 5001,
        ]);
        Program::create([
            'progid' => 55001003,
            'progfullname' => 'Bachelor of Secondary Education Major in English',
            'progshortname' => 'BSEd-English',
            'progschoolid' => 5,
            'progschooldeptid' => 5001,
        ]);
        Program::create([
            'progid' => 55001004,
            'progfullname' => 'Bachelor of Secondary Education Major in Filipino',
            'progshortname' => 'BSEd-Filipino',
            'progschoolid' => 5,
            'progschooldeptid' => 5001,
        ]);
        Program::create([
            'progid' => 55001005,
            'progfullname' => 'Bachelor of Secondary Education Major in Mathematics',
            'progshortname' => 'BSEd-Mathematics',
            'progschoolid' => 5,
            'progschooldeptid' => 5001,
        ]);
        Program::create([
            'progid' => 55001006,
            'progfullname' => 'Bachelor of Secondary Education Major in Science',
            'progshortname' => 'BSEd-Science',
            'progschoolid' => 5,
            'progschooldeptid' => 5001,
        ]);
        Program::create([
            'progid' => 55002001,
            'progfullname' => 'Bachelor of Physical Education',
            'progshortname' => 'BPE',
            'progschoolid' => 5,
            'progschooldeptid' => 5002,
        ]);
        Program::create([
            'progid' => 55003001,
            'progfullname' => 'Bachelor of Special Needs Education - Generalist',
            'progshortname' => 'BSNE-General',
            'progschoolid' => 5,
            'progschooldeptid' => 5003,
        ]);
        Program::create([
            'progid' => 55003002,
            'progfullname' => 'Bachelor of Special Needs Education Major in Early Childhood Education',
            'progshortname' => 'BSNE-ECE',
            'progschoolid' => 5,
            'progschooldeptid' => 5003,
        ]);
        Program::create([
            'progid' => 55003003,
            'progfullname' => 'Bachelor of Special Needs Education Major in Elementary School Teaching',
            'progshortname' => 'BSNE-EST',
            'progschoolid' => 5,
            'progschooldeptid' => 5003,
        ]);
        Program::create([
            'progid' => 1111001001,
            'progfullname' => 'Bachelor of Science in Computer Science',
            'progshortname' => 'BSCS',
            'progschoolid' => 11,
            'progschooldeptid' => 11001,
        ]);
        Program::create([
            'progid' => 1111001002,
            'progfullname' => 'Bachelor of Science in Information Technology',
            'progshortname' => 'BSIT',
            'progschoolid' => 11,
            'progschooldeptid' => 11001,
        ]);
        Program::create([
            'progid' => 1111001003,
            'progfullname' => 'Bachelor of Science in Information Systems',
            'progshortname' => 'BSIS',
            'progschoolid' => 11,
            'progschooldeptid' => 11001,
        ]);
        Program::create([
            'progid' => 1111001004,
            'progfullname' => 'Bachelor of Science in Entertainment and Multimedia Computing',
            'progshortname' => 'BSEMC',
            'progschoolid' => 11,
            'progschooldeptid' => 11001,
        ]);
        Program::create([
            'progid' => 2020001001,
            'progfullname' => 'Bachelof of Science in Nursing',
            'progshortname' => 'BSN',
            'progschoolid' => 20,
            'progschooldeptid' => 20001,
        ]);
    }
}
