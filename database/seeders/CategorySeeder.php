<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $faker = Faker::create('id_ID');

        for($i=1; $i <=10; $i++) {
            DB::table('categories')->insert([
                'name' =>'Kategori '.$faker->numberBetween(1,10),
            ]);
        }
        */
    }
}
