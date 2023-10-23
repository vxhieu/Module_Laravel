<?php

namespace Modules\FgcMangeUser\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\FgcMangeUser\Entities\UserFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // You may want to generate a hashed password using Hash::make() or bcrypt().
            'created_by' => 'VxHieu',
            'updated_by' => 'VxHieu',
        ];
    }
}

