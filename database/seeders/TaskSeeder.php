<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aTask = [
            [
                'description' => 'Estudar pela manhã',
                'category_id' => 2
            ],
            [ 
                'description' => 'Ir a Academia pela manhã',
                'category_id' => 1
            ],
            [
                'description' => 'Almoçar',
                'category_id' => 1
            ]

        ];

        foreach($aTask as $task){
            Task::create($task);
        }
    }
}
