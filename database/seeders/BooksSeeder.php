<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('books')->insert(
            [
                'publishers_id' => $faker->numberBetween(1,6),
                'title' => "A Feast for Crows",
                'author' => "George R. R. Martin",
                'year' => 2005,
                'synopsis' => 'A Feast for Crows is the fourth of seven planned novels in the epic fantasy series A Song of Ice and Fire by American author George R. R. Martin',
                'image' => 'affc.jpeg'
            ]
        );

        DB::table('books')->insert(
            [
                'publishers_id' => $faker->numberBetween(1,6),
                'title' => "No Longer Human",
                'author' => "Osamu Dazai",
                'year' => 1948,
                'synopsis' => 'No Longer Human (人間失格, Ningen Shikkaku) is a 1948 Japanese novel by Osamu Dazai',
                'image' => 'nolongerhuman.png'
            ]
        );

        DB::table('books')->insert(
            [
                'publishers_id' => $faker->numberBetween(1,6),
                'title' => "Nineteen Eighty-Four",
                'author' => "George Orwell",
                'year' => 1949,
                'synopsis' => 'Nineteen Eighty-Four is a dystopian social science fiction novel and cautionary tale written by the English writer George Orwell.',
                'image' => 'bigbrother.png'
            ]
        );

        DB::table('books')->insert(
            [
                'publishers_id' => $faker->numberBetween(1,6),
                'title' => "Thus Spoke Zarathrusta",
                'author' => "Friedrich Nietzsche",
                'year' => 1978,
                'synopsis' => 'Thus Spoke Zarathustra is a foundational work of Western literature and is widely considered to be Friedrich Nietzsche`s masterpiece',
                'image' => 'renfuji.jpg'
            ]
        );

        DB::table('books')->insert(
            [
                'publishers_id' => $faker->numberBetween(1,6),
                'title' => "A Dance With Dragons",
                'author' => "George R. R. Martin",
                'year' => 2011,
                'synopsis' => 'A Dance with Dragons is the fifth novel of seven planned in the epic fantasy series A Song of Ice and Fire by American author George R. R. Martin',
                'image' => 'adad.jpg'
            ]
        );
    }
}
