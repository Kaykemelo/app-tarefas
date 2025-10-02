<?php

namespace Database\Seeders;

use App\Models\DetailsTask;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailsTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aDetails = [
            [
                'description' => 'Estudar 4 Horas',

                'task_id' => 4
            ],

            [
                'description' => 'Treinar Perna',

                'task_id' => 5
            ],

            [
                'description' => 'Comer Proteina',

                'task_id' => 6
            ]
        ];

        foreach ($aDetails as $details) {
            DetailsTask::create($details);
        }
    }
}
