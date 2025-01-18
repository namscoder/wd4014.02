<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Khoa học'],
            ['name' => 'Văn học'],
            ['name' => 'Lịch sử'],
            ['name' => 'Công nghệ'],
            ['name' => 'Trinh thám'],
        ];

        foreach ($categories as $index =>$value){
            DB::table('categories')->insert([
                'id'=>$index+1,
                'name'=>$value['name']
            ]);
        }
    }
}
