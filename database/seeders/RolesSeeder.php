<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach(['User', 'Admin'] as $name) {
            DB::insert('insert into roles (name) values (?)', [$name]);
        }
        
    }
}
