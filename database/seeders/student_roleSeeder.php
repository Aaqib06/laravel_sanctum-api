<?php

namespace Database\Seeders;

use App\Models\student_role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class student_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student_role=collect([

       [
  "student_id"=>1,
  "role_id"=>2,

       ],
       [
        "student_id"=>2,
        "role_id"=>3,
      
             ],
             [
                "student_id"=>3,
                "role_id"=>2,
              
                     ],
                     [
                        "student_id"=>4,
                        "role_id"=>1,
                      
                             ],
                             [
                                "student_id"=>1,
                                "role_id"=>2,
                              
                                     ],


        ]);
        $student_role->each(function($student_role){
            student_role::insert($student_role);
        });
    }
}
