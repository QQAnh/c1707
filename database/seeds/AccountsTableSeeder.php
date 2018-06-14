<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'username' => 'xuanhung1',
                'password' => '123456',
                'salt'=>'',

            ],[

                'username' => 'xuanhung2',
                'password' => '123456',
                'salt'=>'',

            ],[

                'username' => 'xuanhung3',
                'password' => '123456',
                'salt'=>'',

            ],[

                'username' => 'xuanhung4',
                'password' => '123456',
                'salt'=>'',
            ],
        ]);
    }
}
