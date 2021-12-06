<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $faker;

    public function run()
    {
        $this->faker = $faker = Faker\Factory::create();
        $tests = array(
            [
                'name' => 'Pedro',
                'apellido' => 'Rodriguez',
                'email' => 'pedro@gmail.com',
                'password' => bcrypt('12345678')
            ],[
                'name' => 'Nancy',
                'apellido' => 'Palma',
                'email' => 'nancy@gmail.com',
                'password' => bcrypt('12345678')
            ],[
                'name' => 'Aura',
                'apellido' => 'Rojas',
                'email' => 'pedro@gmail.com',
                'password' => bcrypt('12345678')
            ],[
                'name' => 'Dios',
                'apellido' => 'Jerusalen',
                'email' => 'Dios@gmail.com',
                'password' => bcrypt('12345678')
            ]
        );

        foreach ($tests as $key) {
            DB::table('users')->insert($key);
        }

    }
}