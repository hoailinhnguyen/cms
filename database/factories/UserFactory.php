<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'page_id'=>random_int(1,10),
            'page_name'=>$this->faker->name,
            'messenger_id'=>random_int(1,10),
            'fb_full_name'=>$this->faker->name,
            'user_name'=>$this->faker->name,
            'password'=>'password',
            'user_full_name'=>$this->faker->name,
            'group'=>$this->faker->name,
            'pos_group'=>$this->faker->name,
            'permission'=>random_int(1,2),
            'user_phone'=>random_int(1111111111,9999999999),
            'province_id'=>random_int(1,5),
            'user_location_province'=>$this->faker->name,
            'district_id'=>random_int(1,5),
            'user_location_district'=>$this->faker->name,
            'address'=>$this->faker->address,
            'bank_id'=>random_int(111111111111,999999999999),
            'user_bank_name1'=>$this->faker->name,
            'user_bank_account_number1'=>random_int(111111111111,999999999999),
            'bank_id2'=>random_int(111111111111,999999999999),
            'user_bank_name2'=>$this->faker->name,
            'user_bank_account_number2'=>random_int(111111111111,999999999999),
            'telegram_user_name'=>$this->faker->name,
            'telegram_user_id'=>random_int(111111111111,999999999999),
            'telegram_chat_id'=>random_int(111111111111,999999999999),
            'change_pwd_1st_login'=>$this->faker->name,
            'Verify'=>random_int(0,1),
        ];
    }
}
