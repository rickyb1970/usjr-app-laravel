<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\USJRUser;

class USJRUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        USJRUser::create([
                    'username'=>'admin',
                    'userpassword'=>bcrypt('usjr123'),
                    'userempid'=>0,
                    'usertypeid'=>0,
                    'userroleid'=>0
               ]);
    }
}
