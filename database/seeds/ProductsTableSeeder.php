<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Apple iPhone X 64GB Chính hãng',
                'category' => 'smart phone',
                'description' => 'iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.',
                'thumbnail' => 'https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-20-400x400.jpg',
                'price' => 29990000 ,


            ], [
                'title' => 'iPhone 8 Plus Red 256GB (Đỏ)',
                'category' => 'smart phone',
                'description' => 'iPhone 8 Plus đỏ bản 256GB là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đỏ đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến cũng như màu sắc nổi bật, cá tính.
Thiết kế quen thuộc
Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước',
                'thumbnail' => 'https://cdn1.tgdd.vn/Products/Images/42/164236/iphone-8-plus-do-256gb-400x400.jpg',
                'price' => 28950000,


            ], [
                'title' => 'iPhone 8 Plus 256GB',
                'category' => 'smart phone',
                'description' => 'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.
Thiết kế quen thuộc
Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.',
                'thumbnail' => 'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg',
                'price' => 27950000,


            ], [
                'title' => 'Samsung Galaxy S9+ 128GB',
                'category' => 'smart phone',
                'description' => 'Samsung Galaxy S9 Plus 128GB, siêu phẩm smartphone hàng đầu trong thế giới Android đã ra mắt với màn hình vô cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn.',
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/42/154695/samsung-galaxy-s9-plus-128gb-400x400.jpg',
                'price' => 24490000,

            ],
        ]);
    }
}
