<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryTaskTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aCategorysTasks = [
            [
                'category_id' => 1,
                'task_id' => 2
            ],

            [
                'category_id' => 1,
                'task_id' => 3
            ],

            [
                'category_id' => 2,
                'task_id' => 1
            ],

         
        ];

        foreach ($aCategorysTasks as $categoryTask) {
            DB::table('category_task')->insert($categoryTask);
        }
    }
}
