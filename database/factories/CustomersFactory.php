<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "FirstName" => $this->faker->unique()->firstName(),
            "LastName" => $this->faker->unique()->lastName(),
            "DateOfBirth" => $this->faker->unique()->date(),
            "PhoneNumber" => "09010669227",
            "Email" => $this->faker->unique()->email(),
            "BankAccountNumber" => "6037998199609396"
        ];
    }
}
