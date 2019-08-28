<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => str_random(5).'@gmail.com',
                'password' => bcrypt('secret'),
                'role' => 1,
                'avatar' => 'default.jpg',
                'phone' => 87921341
            ]);
        }
    }
}
