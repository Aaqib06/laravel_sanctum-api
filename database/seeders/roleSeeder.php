<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=collect([

[
    "role"=>"author",
    "student_id"=>1
],

[
    "role"=>"developer",
    "student_id"=>3
],

[
    "role"=>"dancer",
    "student_id"=>2
],

[
    "role"=>"cricketerr",
    "student_id"=>1
],




        ]);
        $roles->each(function($role){
role::insert($role);
        });
    }
}
