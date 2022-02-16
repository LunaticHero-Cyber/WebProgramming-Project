<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Kunyit Smoked Beef', 'quantity' => 20, 'price' => 100000, 'description' => 'Authentic smoke beef from indonesia, sprinkled in sterilized kunyit and cooked to perfection', 'image' => 'Kunyit Smoked Beef.jpg'],
            ['name' => 'Lapis Beef', 'quantity' => 16, 'price' => 120000, 'description' => 'Best lapis beef in Indonesia', 'image' => 'Lapis Beef.jpg'],
            ['name' => 'Ice Coffee Gula Aren', 'quantity' => 50, 'price' => 40000, 'description' => 'Classic gula aren ice coffee', 'image' => 'Ice Coffee Gula Aren.jpeg'],
            ['name' => 'Kopi Ginseng', 'quantity' => 10, 'price' => 58000, 'description' => 'Delightful and healthy drink of the day', 'image' => 'Kopi Ginseng.jpg'],
            ['name' => 'Smoked Corned Beef', 'quantity' => 9, 'price' => 90000, 'description' => '100 hour smoked beef, cooked by patience and skill', 'image' => 'Smoked Corned Beef.jpeg'],
        ]);
    }
}
