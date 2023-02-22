<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'email'    => 'test.local',
            'password' => '$2y$10$I64pF3gjuvz9nYVfqkV0P.eYdBfDQTkELy055akmWRaXnyvcJ2REC', //123
        ]);
    }
}
