<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title'     => Str::random(10),
            'author'    => Str::random(15),
            'content'   => Str::random(255)
        ]);
    }
}
