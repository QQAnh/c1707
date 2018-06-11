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
                'Fullname' => 'Hoàng Quỳnh Anh',
                'Date_of_Birth' => '01/07/1999',
                'Email'=>'hoangquynhanh@gmail.com',
                'Phone'=>'012321313',
                'Address'=>'Hà nội ',

            ],[
                'Fullname' => 'Nguyễn Văn Lộc ',
                'Date_of_Birth' => '02/07/1999',
                'Email'=>'nguyenvanloc@gmail.com',
                'Phone'=>'1231311313',
                'Address'=>'Ninh Bình',

            ],[
                'Fullname' => 'Trần Bình Minh',
                'Date_of_Birth' => '03/04/1995',
                'Email'=>'tranbinhminh@gmail.com',
                'Phone'=>'0123123123',
                'Address'=>'Nghệ An',

            ],[
                'Fullname' => 'Vũ Trần Hoàng',
                'Date_of_Birth' => '11/12/1992',
                'Email'=>'vutranhoang@gmail.com',
                'Phone'=>'123123132',
                'Address'=>'Hà Tĩnh',
            ],
        ]);
    }
}
