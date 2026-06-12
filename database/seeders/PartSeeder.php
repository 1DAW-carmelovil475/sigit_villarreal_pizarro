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
        DB::table('parts')->insert([
            'name' => 'ratones',
            'price' => 15.5,
            'stock' => 200,
        ]);

        DB::table('parts')->insert([
            'name' => 'teclados',
            'price' => 37,
            'stock' => 120,
        ]);

        DB::table('parts')->insert([
            'name' => 'monitores-hp',
            'price' => 84.9,
            'stock' => 67,
        ]);

    }
}
