<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('book1')->insert([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'author' => $faker->name,
                'NXB'=>$faker->dateTime,
            ]);
        }
    }
}
