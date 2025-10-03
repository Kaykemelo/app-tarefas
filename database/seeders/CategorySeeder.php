<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aCategory = [
        [
            'name' => 'Saúde'
        ],
        [
            'name' => 'Estudo'
        ]

        ];

        foreach ($aCategory as $Categorys) {
            Category::create($Categorys);
        }
    }
}
