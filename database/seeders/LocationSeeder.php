<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach(['L1', 'L2', 'L3', 'L4', 'L5'] as $name) {
            DB::insert('insert into locations (name, address) values (?, "TestLocation")', [$name]);
        }
        
    }
}
