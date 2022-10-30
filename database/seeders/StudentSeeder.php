<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=>Str::random(10),
                'address'=>Str::random(22),
                'roll'=>'10',
            ],
            [
                'name'=>Str::random(10),
                'address'=>Str::random(22),
                'roll'=>'12',
            ],
        ];
        foreach($data as $key => $value){
            DB::table('students')->insert($data);
        }
    }
}
