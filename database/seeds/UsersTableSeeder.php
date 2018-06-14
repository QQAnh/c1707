<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullname' => 'Hoàng Quỳnh Anh',
                'email'=>'hoangquynhanh@gmail.com',
                'phone'=>'012321313',

            ],[
                'fullname' => 'Nguyễn Văn Lộc ',
                'email'=>'nguyenvanloc@gmail.com',
                'phone'=>'1231311313',

            ],[
                'fullname' => 'Trần Bình Minh',
                'email'=>'tranbinhminh@gmail.com',
                'phone'=>'0123123123',

            ],[
                'fullname' => 'Vũ Trần Hoàng',
                'email'=>'vutranhoang@gmail.com',
                'phone'=>'123123132',
            ],
        ]);
    }
}
