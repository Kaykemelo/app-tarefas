<?php

namespace Database\Seeders;

use App\Models\DetailsTask;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aDetail = [
            [
                'description' => 'Acertar o cavanhaque',
                'task_id' => 4
            ],
            [
                'description' => 'Beber 2 Litros Por dia',
                'task_id' => 5
            ],
            [
                'description' => '20 minutos de Banho de Sol',
                'task_id' => 6
            ],
            [
                'description' => 'Participar dos cultos principais',
                'task_id' => 7
            ],
            [
                'description' => 'Terminar o livro em 2 meses',
                'task_id' => 8
            ],
            [
                'description' => 'Entender um evangelho',
                'task_id' => 9
            ]
            ];

            foreach ($aDetail as $detail) {
                DetailsTask::create($detail);
            }

    }
}
