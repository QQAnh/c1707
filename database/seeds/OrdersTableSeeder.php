<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            [
                'createdAt' => '26-6-2018',
                'totalPrice' => 20000000,
                'shipAddress' => 'Hà Nội',
                'userId' => 2,
                'status' => 1,
            ],
        ]);
    }
}
