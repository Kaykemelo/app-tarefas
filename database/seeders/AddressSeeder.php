<?php

namespace Database\Seeders;

use App\Models\Addresses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aAddress = [

            [
                'name' => 'Av. Calim Eid, 35',
                'addressable_type' => 'App\Models\Stores',
                'addressable_id' => 1
            ],
            [
                'name' => 'Rua Coquetá,61',
                'addressable_type' => 'App\Models\Costumers',
                'addressable_id' => 1 
            ]
        
        ];

        foreach ($aAddress as $address) {
            Addresses::create($address); 
        }
    }
}
