<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_EN');

        for ($i=0; $i < 5000; $i++) {
            DB::table('post')->insert([
                'title'     => $faker->name."'s Books",
                'author'    => $faker->name,
                'content'   => $faker->paragraph
            ]);
        }
    }
}
