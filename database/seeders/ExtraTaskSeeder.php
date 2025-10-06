<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aTasks = [
            [
                'description' => 'Fazer a Barba',
                'category_id' => 1
            ],
            [
                'description' => 'Beber Agua',
                'category_id' => 1
            ],
            [
                'description' => 'Tomar Sol',
                'category_id' => 1 
            ],
            [
                'description' => 'ir pra igreja',
                'category_id' => 2 
            ],
            [
                'description' => 'Ler um Livro',
                'category_id' => 2
            ],
            [
                'description' => 'Ler a Biblia',
                'category_id' => 2
            ]
        ];

        foreach ($aTasks as $tasks) {
            Task::create($tasks);
        }
    }
}
