<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // truncate comments table
        // DB::table('comments')->truncate();

        // definisi faker
        $faker = Factory::create();
        $body = $faker->sentence;
        $user_id = \App\Models\User::isUser()->inRandomOrder()->first()->id;

        $attr = [
            'body' => $body,
            'user_id' => $user_id,
        ];

        $book = Book::find(1); //get book where id = 1
        $book->comments()->create($attr); //insert to comments table where commentable_id 1 = and commentable_type = 'App\Models\Blog'


    }
}
