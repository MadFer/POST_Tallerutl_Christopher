<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
/**
 * Created by PhpStorm.
 * User: tallerutl
 * Date: 16/07/15
 * Time: 01:38 PM
 */
class UsersSeeders extends Seeder
{
    public function run(){
        $faker = Faker::create();

        for($i = 0; $i < 30; $i++){
            $id= \DB:: table('users')-> insertGetId(array(
                'name'=> $faker -> firstName,
                'email'=> $faker -> unique() ->email,
                'password'=>\Hash::make('123456'),
                'alias'=> $faker -> userName,

            ));

        }

    }

}