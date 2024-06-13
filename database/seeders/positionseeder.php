<?php

namespace Database\Seeders;

use App\Models\position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class positionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions=collect([
[

"stu_position"=>"ist position",
"role_id"=>2,

],

[

    "stu_position"=>"2nd position",
    "role_id"=>1,
    
    ],

    [

        "stu_position"=>"third position",
        "role_id"=>3,
        
        ],
        ]);
        $positions->each(function($position){
            position::insert($position);
        });
    }
}
