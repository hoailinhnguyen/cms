<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_name'=>$this->faker->name,
            'full_name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'bank_id'=>random_int(1,10),
            'post_group_id'=>random_int(1,10),
            'limit'=>random_int(11111111,9999999999),
            'account_number'=>random_int(11111111,9999999999),
            'phone'=>random_int(11111111,9999999999),
            'active_master'=>random_int(0,1),
            'active_visa'=>random_int(0,1),
            'active_jcb'=>random_int(0,1),
            'active_napas'=>random_int(0,1),
            'master'=>random_int(1,10),
            'visa'=>random_int(1,10),
            'jcb'=>random_int(1,10),
            'napas'=>random_int(1,10),
            'description'=>$this->faker->address,
        ];
    }
}
