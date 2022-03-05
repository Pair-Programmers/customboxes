<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'colors' => $this->faker->randomElement(['1', '2', '5', '1/5', '4/6']),
            'dimensions' => $this->faker->randomElement(['25 x 45 x 100', '250 x 545 x 130', '5 x 405 x 780']),
            'unit' => $this->faker->randomElement(['inch', 'cm', 'm']),
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->e164PhoneNumber(),
            'note' => $this->faker->paragraph(),
            'page_url' => $this->faker->url(),
            'status' => $this->faker->randomElement(['pending', 'inprocess', 'canceled', 'shipped', 'delivered']),

            'product_id' => Product::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
            'created_by'=> Admin::pluck('id')->random(),
        ];
    }
}
