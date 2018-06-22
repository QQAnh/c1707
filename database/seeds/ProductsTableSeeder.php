<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'category' => 1,
                'description' => 'iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.',
                'thumbnail' => 'https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-20-400x400.jpg',
                'price' => 29990000 ,
            ], [
                'title' => 'iPhone 8 Plus Red 256GB (Đỏ)',
                'category' => 1,
                'description' => 'iPhone 8 Plus đỏ bản 256GB là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đỏ đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến cũng như màu sắc nổi bật, cá tính.
Thiết kế quen thuộc
Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước',
                'thumbnail' => 'https://cdn1.tgdd.vn/Products/Images/42/164236/iphone-8-plus-do-256gb-400x400.jpg',
                'price' => 28950000,



            ], [
                'title' => 'iPhone 8 Plus 256GB',
                'category' => 1,
                'description' => 'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.
Thiết kế quen thuộc
Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.',
                'thumbnail' => 'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg',
                'price' => 27950000,



            ], [
                'title' => 'Samsung Galaxy S9+ 128GB',
                'category' => 1,
                'description' => 'Samsung Galaxy S9 Plus 128GB, siêu phẩm smartphone hàng đầu trong thế giới Android đã ra mắt với màn hình vô cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn.',
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/42/154695/samsung-galaxy-s9-plus-128gb-400x400.jpg',
                'price' => 24490000,


            ],[
                'title' => 'Apple iPhone 8 Plus 64GB',
                'category' => 1,
                'description' => 'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.
Thiết kế quen thuộc
Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.',
                'thumbnail' => 'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg',
                'price' => 24490000,

            ],[
                'title' => 'Samsung Galaxy A6',
                'category' => 1,
                'description' => 'Sau sự ra mắt của bộ đôi Samsung Galaxy A8, A8 Plus, hãng điện thoại Samsung  tiếp tục cho ra mắt sản phẩm mới thuộc phân khúc tầm trung. Sản phẩm giữ nguyên thiết kế của dòng Galaxy A và tính năng giống với A8, Samsung A6 hứa hẹn sẽ được nhiều người hài lòng và sử dụng nhiều nhất trong các dòng Samsung Galaxy.',
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-1-400x460.png',
                'price' => 6990000,

            ],[
                'title' => 'Xiaomi Redmi S2 32GB',
                'category' => 1,
                'description' => 'Xiaomi Redmi S2 – một chiếc điện thoại thuộc phân khúc giá rẻ khác của Xiaomi đã bắt đầu rò rỉ rất nhiều thông tin từ thiết kế cho đến cấu hình phần cứng.',
                'thumbnail' => 'https://technave.com/data/files/mall/article/201805150102413661.jpg',
                'price' => 3990000,

            ],[
                'title' => 'Oppo A71 32GB (2018)',
                'category' => 1,
                'description' => 'Phiên bản OPPO A71 (2018) bản 32 GB ra mắt với vi xử lý Snapdragon 450 mạnh mẽ hơn, chụp ảnh selfie làm đẹp bằng AI thông minh và giá rẻ hơn.',
                'thumbnail' => 'http://dienmaythienhoa.vn/images/thumbnails/55/315/315/Untitled-1150546302359bb8aefe6d27.jpg',
                'price' => 24490000,

            ],[
                'title' => 'Asus Zenfone Max Plus M1',
                'category' => 1,
                'description' => 'Zenfone Max Plus M1 là chiếc smartphone theo xu thế màn hình viền mỏng đầu tiên của ASUS. Với ưu điểm thiết kế đẹp, pin lớn truyền thống dòng Zenfone Max, camera kép và mức giá tầm trung cực kì hấp dẫn và đáng sở hữu.',
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/42/139346/asus-zenfone-max-m1-plus-zb570tl-1-400x460.png',
                'price' => 4490000,

            ],[
                'title' => ' Laptop Lenovo IdeaPad 320S-13IKBR 81AK009FVN ',
                'category' => 2,
                'description' => 'IdeaPad 320S có bề mặt sơn trơn với thiết kế cứng cáp, sử dụng vi xử lý intel Core i thế hệ thứ 7, bổ sung thêm ram và bộ nhớ cho hiệu năng sử dụng mạnh mẽ, Màn hình sắc nét với thiết kế kim loại cao cấp được thiết kế để đáp ứng các nhu cầu giải trí theo phong cách của bạn',
                'thumbnail' => 'https://media.static-adayroi.com/240_240/80/h16/ha5/9547043667998.jpg',
                'price' => 24490000,

            ],[
                'title' => 'Laptop Dell Inspiron 14 3467 M20NR2 ',
                'category' => 2,
                'description' => 'Màn hình 14 inches hiển thị sắc nét, laptop Dell Inspiron 14 3467 dễ dàng thao tác. Công nghệ chiếu sáng đèn LED hiển thị hình ảnh tốt, góp phần tiết kiệm điện.',
                'thumbnail' => 'https://media.static-adayroi.com/240_240/80/h59/h2b/13305864847390.jpg',
                'price' => 15990000,

            ],[
                'title' => 'Laptop Dell Inspiron 3559 ',
                'category' => 2,
                'description' => 'i5 6200U 4G 500G VGA R5 M315 2G Màn 15.6 inches Đen (Hàng nhập khẩu) - Tặng túi xách laptop',
                'thumbnail' => 'https://media.static-adayroi.com/240_240/80/h62/h80/13570800255006.jpg',
                'price' => 14490000,

            ],

        ]);
    }
}
