<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $name_lists = [
            'Amazon',
            'PT Tiga Serangkai',
            'PT Media Pustaka',
            'PT Gramedia Pustaka Utama',
            'Penerbit Erlangga',
            'Bhuana Ilmu Populer'
        ];

        $image_list = [
            'amazon.png',
            'tigaserangkai.jpg',
            'mediapustaka.jpeg',
            'gramedia.png',
            'erlangga.jpg',
            'bhuanailmupopuler.jpg'
        ];


        for ($i=0; $i < 6; $i++) {
            DB::table('publishers')->insert(
                [
                    'name' => $name_lists[$i],
                    'address' => $faker->address(),
                    'email' => $faker->email(),
                    'phone' => $faker->phoneNumber(),
                    'image' => $image_list[$i]
                ]
            );
        }
    }
}
