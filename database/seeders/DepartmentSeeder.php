<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Department::create([
            'deptid' => 3001,
            'deptfullname' => 'Accountancy and Finance Department',
            'deptshortname' => '',
            'deptschoolid' => 3,
        ]);
        Department::create([
            'deptid' => 3002,
            'deptfullname' => 'Business and Entrepreneurship Department',
            'deptshortname' => '',
            'deptschoolid' => 3,
        ]);
        Department::create([
            'deptid' => 3003,
            'deptfullname' => 'Marketing and Human Resource Management Department',
            'deptshortname' => '',
            'deptschoolid' => 3,
        ]);
        Department::create([
            'deptid' => 3004,
            'deptfullname' => 'Tourism and Hospitality Management Department',
            'deptshortname' => 'THMD',
            'deptschoolid' => 3,
        ]);
        Department::create([
            'deptid' => 6001,
            'deptfullname' => 'Department of Communications, Language and Literature',
            'deptshortname' => 'DLL',
            'deptschoolid' => 6,
        ]);
        Department::create([
            'deptid' => 6002,
            'deptfullname' => 'Department of Mathematics and Sciences',
            'deptshortname' => 'DMS',
            'deptschoolid' => 6,
        ]);
        Department::create([
            'deptid' => 6003,
            'deptfullname' => 'Department of Social Sciences and Philiosophy',
            'deptshortname' => 'DSSP',
            'deptschoolid' => 6,
        ]);
        Department::create([
            'deptid' => 6004,
            'deptfullname' => 'Department of Psychology and Library Information Science',
            'deptshortname' => 'DPLIS',
            'deptschoolid' => 6,
        ]);
        Department::create([
            'deptid' => 4001,
            'deptfullname' => 'Department of Civil Engineering',
            'deptshortname' => '',
            'deptschoolid' => 4,
        ]);
        Department::create([
            'deptid' => 4002,
            'deptfullname' => 'Department of Computer Engineering',
            'deptshortname' => '',
            'deptschoolid' => 4,
        ]);
        Department::create([
            'deptid' => 4003,
            'deptfullname' => 'Department of Electronics and Communications Engineering',
            'deptshortname' => '',
            'deptschoolid' => 4,
        ]);
        Department::create([
            'deptid' => 4004,
            'deptfullname' => 'Department of Electrical Engineering',
            'deptshortname' => '',
            'deptschoolid' => 4,
        ]);
        Department::create([
            'deptid' => 4005,
            'deptfullname' => 'Department of Industrial Enginering',
            'deptshortname' => '',
            'deptschoolid' => 4,
        ]);
        Department::create([
            'deptid' => 4006,
            'deptfullname' => 'Department of Mechanical Engineering',
            'deptshortname' => '',
            'deptschoolid' => 4,
        ]);
        Department::create([
            'deptid' => 5001,
            'deptfullname' => 'Department of Teacher Education',
            'deptshortname' => '',
            'deptschoolid' => 5,
        ]);
        Department::create([
            'deptid' => 5002,
            'deptfullname' => 'Department of Physical Education',
            'deptshortname' => '',
            'deptschoolid' => 5,
        ]);
        Department::create([
            'deptid' => 5003,
            'deptfullname' => 'Department of Special Education',
            'deptshortname' => '',
            'deptschoolid' => 5,
        ]);
        Department::create([
            'deptid' => 11001,
            'deptfullname' => 'CS/IT Department',
            'deptshortname' => '',
            'deptschoolid' => 11,
        ]);
        Department::create([
            'deptid' => 20001,
            'deptfullname' => 'Department of Nursing',
            'deptshortname' => '',
            'deptschoolid' => 20,
        ]);
    }
}
