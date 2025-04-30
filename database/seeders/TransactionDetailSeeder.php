<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 10 ; $i++) {
            DB::table('transaction_details')->insert([
                'transaction_id' => $faker->numberBetween(1,10),
                'item_id' => $faker->numberBetween(1,10),
                'qty' => $faker->numberBetween(1,10),
                'subtotal' => $faker->numberBetween(10000,1000000),
            ]);
        }
        */
    }
}
