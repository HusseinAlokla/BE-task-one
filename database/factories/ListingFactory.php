<?php

namespace Database\Factories;

use App\Models\Listing_model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'tags' => 'laravel, api, backend',
            'company' => fake()->company(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(5),

        ];
    }
}
