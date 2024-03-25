<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creating Dump Data For Book
        $book = array(
            ['title'=>'Elon Musk','author'=>'Walter Isaacson','description'=>'"Elon Musk" by Walter Isaacson provides an in-depth exploration of the life and mind of the visionary entrepreneur.','publishDate'=>'2023-09-11'],
            ['title'=>'The Lightning Thief','author'=>'Rick Riordans','description'=>'"The Lightning Thief" is the first book in the "Percy Jackson and the Olympians" series, written by Rick Riordan.','publishDate'=>'2005-06-28']
        );

        DB::table('books')->insert($book);
    }
}
