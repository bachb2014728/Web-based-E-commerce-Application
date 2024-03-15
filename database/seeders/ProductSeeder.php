<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->upsert([
            ['tensanpham'=>'Bộ vi xử lý Intel Core i3 12100F',
                'url'=>'a001',
                'gia'=>2290,
                'category_id'=>1,
                'mota'=> 'Bộ vi xử lý Intel Core i3 12100F vừa được Intel công bố vào những ngày cuối năm 2021. CPU gen 12th mới nhất hay còn được gọi là Alder Lake sau Series đình đám i3 skylake. Intel Core i3 12100F sử dụng một kiến trúc hoàn toàn mới để đem đến một hiệu năng mạnh mẽ hơn. Nó sẽ là sự lựa chọn lý tưởng cho những đối tượng không cần một dàn PC quá khủng như nhân viên văn phòng,...Intel Core i3 12100F hứa hẹn mang đến trải nghiệm tuyệt vời cho người dùng phổ thông.',
                'image'=>'i3.webp']
        ],'id');
        DB::table('image_detail_products')->insert([
            ['listimage'=> 'i3_2.webp','product_id'=> 1],
            ['listimage'=> 'i3_3.webp','product_id'=> 1],
        ]);
    }
}
