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
                'task_id' => 5
            ],

            [
                'category_id' => 1,
                'task_id' => 7
            ],

            [
                'category_id' => 2,
                'task_id' => 4
            ],

            [
                'category_id' => 2,
                'task_id' => 8
            ]
        ];

        foreach ($aCategorysTasks as $categoryTask) {
            DB::table('category_task')->insert($categoryTask);
        }
    }
}
