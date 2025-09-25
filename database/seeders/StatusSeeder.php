<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aStatus = [
            [
            'description' => 'Pendente',

            'active' => 0
            ],

            [
            'description' => 'Concluida',

            'active' => 1
            ]
        ];

        foreach ($aStatus as $status) {
            Status::create($status);
        }
    }
}
