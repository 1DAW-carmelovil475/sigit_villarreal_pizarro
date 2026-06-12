<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('equipment')->insert([
            'inventory_code' => 1,
            'type' => 'monitor',
            'brand' => 'hp',
            'model' => '5008',
        ]);

        DB::table('equipment')->insert([
            'inventory_code' => 2,
            'type' => 'monitor',
            'brand' => 'aoc',
            'model' => 'clase',
        ]);

        DB::table('equipment')->insert([
            'inventory_code' => 3,
            'type' => 'teclado',
            'brand' => 'ticnova',
            'model' => 'old',
        ]);

        DB::table('equipment')->insert([
            'inventory_code' => 4,
            'type' => 'raton',
            'brand' => 'logitech',
            'model' => 'especial edition',
        ]);

        DB::table('equipment')->insert([
            'inventory_code' => 5,
            'type' => 'ordenador',
            'brand' => 'asus',
            'model' => 'gaming',
        ]);
    }
}
