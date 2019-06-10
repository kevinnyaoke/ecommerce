<?php

use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker=Faker::create();

        User::create([
            'firstname' => 'admin',
            'lastname'  => 'ochola',
            'admin'   => '1',
            'email'     =>  'admin@gmail.com',
            'gender'   =>   'male',
            'city'     =>  'nairobi',
            'country'  =>  'kenya',
            'password'  =>  bcrypt('password'),
        ]);
        User::create([
            'firstname' => 'kevin',
            'lastname'  => 'odhiambo',
            'admin'   => '0',
            'email'     =>  'kevin@gmail.com',
            'gender'   =>   'male',
            'city'     =>  'nairobi',
            'country'  =>  'kenya',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
