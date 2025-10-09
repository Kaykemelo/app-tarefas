<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aTools = [
            [
                'name' => 'Whatssap'
            ],
            [
                'name' => 'Instagram'
            ],
            [
                'name' => 'facebook'
            ],
            [
                'name' => 'Youtube'
            ],
            [
                'name' => 'Tik Tok'
            ]
          
        ];

        foreach ($aTools as $tools) {
            Tool::create($tools);
        }
    }
}
