<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name'=>$this->faker->name,
            'phone'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'city_id'=>random_int(1, 50),
            'district_id'=>random_int(1, 6),
            'card_full_name'=>$this->faker->name,
            'card_number'=>mt_rand(111111111111,999999999999),
            'card_expiration_date'=>$this->faker->date('Y-m-d'),
            'card_cif'=>mt_rand(111,999),
            'card_limit'=>mt_rand(1000000,9999999),
            'account_number'=>mt_rand(1111111111,9999999999),
            'card_phone'=>$this->faker->phoneNumber,
            'statement_date'=>$this->faker->date('Y-m-d'),
            'option_date'=>random_int(0,1),
            'card_type'=>random_int(0,1),
            'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
        ];
    }
}
