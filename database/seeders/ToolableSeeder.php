<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aToolables = [
            [
                'tool_id' => 1,
                'toolable_type' => 'App\Models\Costumers',
                'toolable_id' => 1
            ],
            [
                'tool_id' => 2,
                'toolable_type' => 'App\Models\Costumers',
                'toolable_id' => 1
            ],
            [
                'tool_id' => 5,
                'toolable_type' => 'App\Models\Costumers',
                'toolable_id' => 1
            ],
            [
                'tool_id' => 1,
                'toolable_type' => 'App\Models\Stores',
                'toolable_id' => 2
            ],
            [
                'tool_id' => 2,
                'toolable_type' => 'App\Models\Stores',
                'toolable_id' => 2 
            ],
            [
                'tool_id' => 4,
                'toolable_type' => 'App\Models\Stores',
                'toolable_id' => 2
            ]
            
        ];

        foreach ($aToolables as $toolable) {
            DB::table('toolables')->insert($toolable);
        }
    }
}
