<?php

namespace Database\Seeders;

use App\Models\Stores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aStores = [
            
            [
                'name' => 'Food Express'
            ],
            [
                'name' => 'New Era Shop'
            ],
            [
                'name' => 'Puma Outlet'
            ]
        ];

        foreach ($aStores as $stores) {
            Stores::create($stores);
        }
    }
}
