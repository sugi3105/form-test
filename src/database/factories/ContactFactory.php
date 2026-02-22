<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'postcode' => $this->faker->postcode(),
            'tel' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'address' => $this->faker->address(),
            'building' => $this->faker->optional()->secondaryAddress(),
            'detail' => $this->faker->realText(50),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            //
        ];
    }
}
