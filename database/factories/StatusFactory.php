<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $data_time = $this->faker->date. '' . $this->faker->time;
        return [
            'user_id' => $this->faker->randomElement(['1','2','3']),
            'content' => $this->faker->text(),
            'created_at' => $data_time,
            'updated_at' => $data_time
        ];
    }
}
