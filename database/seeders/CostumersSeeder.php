<?php

namespace Database\Seeders;

use App\Models\Costumers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CostumersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aCostumers = [

            [
                'name' => 'Kayke Melo'
            ],
            [
                'name' => 'Sara Dias'
            ], 
            [
                'name' => 'Ailton Almeida'
            ]  
                  
        ];

        foreach ($aCostumers as $costumers) {
            Costumers::create($costumers); 
        } 
    }
}
