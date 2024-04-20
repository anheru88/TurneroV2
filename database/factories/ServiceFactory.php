<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $service_id = null;

        if (count(Service::all()) > 0 && fake()->boolean) {
            $service_id = Service::all()->random()->id;
        }

        return [
            'name' => fake()->name(),
            'service_parent_id' => $service_id,
        ];
    }
}
