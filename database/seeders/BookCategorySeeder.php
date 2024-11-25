<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i <= 5 ; $i++) {
            $r = $faker->numberBetween(1, 4);
            $used = [
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0,
                6 => 0,
                7 => 0,
                8 => 0,
                9 => 0,
                10 => 0,
                11 => 0,
                12 => 0,
                13 => 0
            ];
            $j = 0;
            while ($j < $r) {
                $id = $faker->numberBetween(1, 13);
                if ($used[$id] == 1) {
                    continue;
                }
                $used[$id] = 1;
                DB::table('book_categories')->insert(
                    [
                        'book_id' => $i,
                        'category_id' => $id,
                    ]
                );
                $j++;
            }
        }
    }
}
