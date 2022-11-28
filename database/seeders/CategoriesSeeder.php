<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => "Action & Adventure"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Science Fiction"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Fantasy"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Childrens"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Adult"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Non-Fiction"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Romance"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Psychological"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Mystery"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Thriller & Suspense"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Historical Fiction"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Comedy"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Drama"
            ]
        );
    }
}
