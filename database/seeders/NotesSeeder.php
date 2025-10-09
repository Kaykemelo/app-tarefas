<?php

namespace Database\Seeders;

use App\Models\Notes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aNotes = [
            [
                'description' => 'Comprar um novo produto',
                'notable_type' => 'App\Models\Costumers',
                'notable_id' => 1 
            ],
            [
                'description' => 'Entrar em contato na proxima semana',
                'notable_type' => 'App\Models\Costumers',
                'notable_id' => 1
            ],
            [
                'description' => 'Enviar a documentação do espaço',
                'notable_type' => 'App\Models\Stores',
                'notable_id' => 2
            ],
            [
                'description' => 'Encomendar novas mercadorias ',
                'notable_type' => 'App\Models\Stores',
                'notable_id' => 2 
            ]
        ];

        foreach ($aNotes as $notes) {
            Notes::create($notes);
        }
    }
}
