<?php

namespace Database\Seeders;

use App\Models\specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class specializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        specialization::create(['name'=>'Civil']);
        specialization::create(['name'=>'Programming']);
        specialization::create(['name'=>'Planning']);
        specialization::create(['name'=>'Architecture']);
        specialization::create(['name'=>'Electrical']);
        specialization::create(['name'=>'Mechanics']);

    }
}
