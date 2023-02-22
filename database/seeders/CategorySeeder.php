<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach(['Vorbereitung', 'Gastro', 'Infrastruktur'] as $name) {
            DB::insert('insert into categories (name) values (?)', [$name]);
        }
        
    }
}
