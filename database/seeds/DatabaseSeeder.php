<?php

//use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

//use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $users = factory(App\User::class, 40)
            ->create()
            ->each(function ($user) {
                $user->perfilvendedor()->save(factory(App\Models\PerfilVendedor::class)->make());
            });

        /*
    $faker = Faker::create();

    foreach (range(1, 10) as $index) {
    DB::table('employees')->insert([
    'name' => $faker->name,
    'email' => $faker->email,
    'phone_number' => $faker->phoneNumber,
    'dob' => $faker->date($format = 'D-m-y', $max = '2000', $min = '1990'),
    ]);
    }
     */
    }
}
