<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'fred.michael', 'email' => 'fred.michael@gmail.com', 'password' => bcrypt('fred123')],
            ['username' => 'reivaldo.julianto', 'email' => 'reivaldo.julianto@gmail.com', 'password' => bcrypt('reivaldo123')],
            ['username' => 'theresia.kharisma', 'email' => 'theresia.kharisma@gmail.com', 'password' => bcrypt('theresia123')]
        ]);
    }
}
