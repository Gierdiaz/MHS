<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $patients = [
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '21',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '20',
                'gender'  => 'F',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '30',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '24',
                'gender'  => 'F',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '26',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '25',
                'gender'  => 'F',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '18',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '22',
                'gender'  => 'F',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '25',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '30',
                'gender'  => 'F',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '28',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '32',
                'gender'  => 'F',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '27',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '29',
                'gender'  => 'F',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '23',
                'gender'  => 'M',
            ],
            [
                'user_id' => DB::table('users')->where('name', 'Allison')->where('email', 'test@example.com')->value('id'),
                'name'    => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'age'     => '26',
                'gender'  => 'F',
            ],
        ];

        foreach ($patients as $patient) {
            DB::table('patients')->insert($patient);
        }
    }
}
