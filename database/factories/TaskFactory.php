<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $randomDate = Carbon::now()->addDays(rand(7, 10));
        $to = $randomDate->copy()->addMinutes(rand(60, 300));

        return [
            'title'       => $this->faker->jobTitle, 
            'desc'        => $this->faker->text(), 
            'from'        => $randomDate,
            'until'       => $to,
            'duration'    => $randomDate->diffInSeconds($to),
            'max_helpers' => rand(3, 20), 
            'location_id' => Location::all()->random()->id, 
            'category_id' => Category::all()->random()->id,
        ];
    }
}
