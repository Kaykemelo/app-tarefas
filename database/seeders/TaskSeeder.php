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
                'description' => 'Estudar pela manhã'
            ],
            [ 
                'description' => 'Ir a Academia pela manhã'
            ],
            [
                'description' => 'Almoçar'
            ]

        ];

        foreach($aTask as $task){
            Task::create($task);
        }
    }
}
