<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate table book_user
        // DB::table('book_user')->truncate();

        // definisi model book dan user
        $books = \App\Models\Book::all();
        $users = \App\Models\User::all();

        // setiap user memiliki beberapa book
        foreach ($users as $user ) {
            $bookIds = $books->random(rand(1, 3))->pluck('id')->toArray(); //return collection id from book
            $user->books()->attach($bookIds); //insert to book_user table
        }
    }
}
