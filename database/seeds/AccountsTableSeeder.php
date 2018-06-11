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
                'Username' => 'xuanhung1',
                'Password' => '123456',
                'Salt'=>'',
                'Status'=>1 ,

            ],[

                'Username' => 'xuanhung2',
                'Password' => '123456',
                'Salt'=>'',
                'Status'=>1 ,

            ],[

                'Username' => 'xuanhung3',
                'Password' => '123456',
                'Salt'=>'',
                'Status'=>1 ,

            ],[

                'Username' => 'xuanhung4',
                'Password' => '123456',
                'Salt'=>'',
                'Status'=>1 ,
            ],
        ]);
    }
}
