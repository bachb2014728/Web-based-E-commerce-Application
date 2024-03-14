<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->upsert([
            ['name' => 'PC','slug' => 'pc'],//1
            ['name'=>'Linh kiện máy tính', 'slug' => 'linh-kien-may-tinh'],//2
            ['name'=>'Màn hình','slug' => 'man-hinh'],//3
            ['name'=>'Bộ nhớ lưu trữ','slug' => 'bo-nho-luu -tru'],//4
            ['name'=>'Bàn phím','slug' => 'ban-phim'],//5
            ['name'=>'Chuột','slug' => 'amd-dong-a'],//6
        ],'slug');
        DB::table('categories')->upsert([
            ['name' => 'PC Gaming','parent_cate'=>1,'slug' => 'pc-gaming'],//7
            ['name' => 'PC Làm việc','parent_cate'=>1,'slug' => 'pc-lam-viec'],//8
        ],'slug');
        DB::table('categories')->upsert([

            ['name' => 'CPU-Bộ vi xử lý Intel','parent_cate'=>2,'slug' => 'cpu-bo-vi-xu-ly-intel'],//10
            ['name' => 'Intel xeon','parent_cate'=>9,'slug' => 'intel-xeon'],
            ['name' => 'Intel Core i3','parent_cate'=>9 ,'slug' => 'intel-core-i3'],//11
            ['name'=>'Intel Core i5','parent_cate'=>9 ,'slug' => 'intel-core-i5 '],//12
            ['name'=>'Intel Core i7','parent_cate'=>9 ,'slug' => 'intel-core-i7 '],//13
            ['name'=>'Intel Core i9','parent_cate'=>9,'slug' => 'intel-core-i9 '],//14

            ['name' => 'CPU-Bộ vi xử lý AMD','parent_cate'=>2,'slug' => 'cpu-bo-vi-xu-ly-amd'],//15
            ['name'=>'AMD Ryzen 3','parent_cate'=>15 ,'slug' => 'amd-ryzen-3 '],//20
            ['name'=>'AMD Ryzen 5','parent_cate'=>15 ,'slug' => 'amd-ryzen-5 '],//21
            ['name' => 'AMD Ryzen 7','parent_cate'=>15 ,'slug' => 'amd-ryzen-7 '],//22
            ['name' => 'AMD Ryzen 9','parent_cate'=>15 ,'slug' => 'amd-ryzen-9 '],//23

            ['name' => 'Mainboard-Bo mạch chủ Intel','parent_cate'=>2,'slug' => 'mainboard-bo-mach-chu-intel'],//20
            ['name'=>'Intel dòng Z','parent_cate'=>20 ,'slug' => 'intel-dong-z'],//31
            ['name'=>'Intel dòng B','parent_cate'=>20 ,'slug' => 'intel-dong-b'],//32
            ['name'=>'Intel dòng H','parent_cate'=>20 ,'slug' => 'intel-dong-h'],//33

            ['name' => 'Mainboard-Bo mạch chủ AMD','parent_cate'=>2,'slug' => 'mainboard-bo-mach-chu-amd'],//24
            ['name'=>'AMD dòng A','parent_cate'=>24 ,'slug' => 'amd-dong-a'],//34
            ['name'=>'AMD dòng X','parent_cate'=>24 ,'slug' => 'amd-dong-x'],//35
            ['name'=>'AMD dòng B','parent_cate'=>24 ,'slug' => 'amd-dong-b'],//36

            ['name'=>'PSU-Nguồn máy tính','parent_cate'=>2,'slug' => 'psu-nguon-may-tinh'],//29
            ['name' => 'Nguồn trên 1000W','parent_cate'=>27 ,'slug' => 'nguon-tren-1000w '],//24
            ['name' => 'Nguồn từ 700W-850W','parent_cate'=>27 ,'slug' => 'nguon-tu-700w-850w'],//25
            ['name' => 'Nguồn từ 550W-650W','parent_cate'=>27 ,'slug' => 'nguon-tu-550w-650w'],//26
            ['name' => 'Nguồn từ 300W-500W','parent_cate'=>27 ,'slug' => 'nguon-tu-300w-500w'],//27
            ['name' => 'Nguồn Corsair','parent_cate'=>27 ,'slug' => 'nguon-corsair'],//28
            ['name' => 'Nguồn Z-Power','parent_cate'=>27 ,'slug' => 'nguon-z-power'],//29
            ['name'=>'Nguồn Cooler Master','parent_cate'=>27 ,'slug' => 'nguon-cooler-master'],//36
            ['name' => 'Nguồn NZXT','parent_cate'=>27,'slug' => 'nguon-nzxt'],//14
        ],'slug');

        DB::table('categories')->upsert([
            ['name'=>'RAM DDR4 / DDR5','parent_cate'=>4,'slug' => 'ram'],//37
            ['name'=>'RAM LED RGB','parent_cate'=>37 ,'slug' => 'ram-led-rgb'],//38
            ['name'=>'RAM 8GB','parent_cate'=>37 ,'slug' => 'ram-8g'], //39
            ['name'=>'RAM 16GB','parent_cate'=>37 ,'slug' => 'ram-16g'],//40
            ['name'=>'RAM Corsair','parent_cate'=>37 ,'slug' => 'ram-corsair'],//41
            ['name'=>'RAM Kingston','parent_cate'=>37 ,'slug' => 'ram-kingston'],//42
            ['name'=>'RAM GSkill','parent_cate'=>37 ,'slug' => 'ram-gskill'],//43
            ['name'=>'RAM PNY','parent_cate'=>37 ,'slug' => 'ram-pny'],//44

            ['name'=>'SSD','parent_cate'=>4,'slug' => 'ssd'],//45
            ['name'=>'SSD NVMe Gen 3','parent_cate'=>45 ,'slug' => 'ssd-nvme-gen -3'],//46
            ['name'=>'SSD NVMe Gen 4','parent_cate'=>45 ,'slug' => 'ssd-nvme-gen -3'],//47
            ['name'=>'SSD Sata','parent_cate'=>45 ,'slug' => 'ssd-sata'],//48
            ['name'=>'SSD Samsung','parent_cate'=>45 ,'slug' => 'ssd-samsung'],//49
            ['name'=>'SSD Kingston','parent_cate'=>45 ,'slug' => 'ssd-kingston'],//50
            ['name'=>'SSD Westem Digital','parent_cate'=>45 ,'slug' => 'ssd-westem-digital'],//51

            ['name'=>'HDD','parent_cate'=>4,'slug'=>'hdd'],//52
            ['name'=>'HDD 1TB','parent_cate'=>52 ,'slug' => 'hdd-1tb'],//53
            ['name'=>'HDD 2TB','parent_cate'=>52 ,'slug' => 'hdd-2tb'],//54

        ],'slug');
        DB::table('categories')->upsert([
            ['name'=>'Hãng sản xuất','parent_cate'=>3,'slug' => 'hang-san-xuat'],//55
            ['name'=>'LG','parent_cate'=>55,'slug'=>'lg'],//52
            ['name'=>'Asus','parent_cate'=>55 ,'slug' => 'asus'],//53
            ['name'=>'ViewSonic','parent_cate'=>55 ,'slug' => 'viewsonic'],//54
            ['name'=>'Dell','parent_cate'=>55,'slug'=>'dell'],//52
            ['name'=>'AOC','parent_cate'=>55,'slug' => 'aoc'],//53
            ['name'=>'Acer','parent_cate'=>55,'slug' => 'acer'],//54
            ['name'=>'E-Dra','parent_cate'=>55,'slug'=>'e-dra'],//52
            ['name'=>'MSI','parent_cate'=>55,'slug' => 'msi'],//63

            ['name'=>'Giá tiền','parent_cate'=>3 ,'slug' => 'gia-tien'],//64
            ['name'=>'Giá dưới 1 triệu','parent_cate'=>64,'slug'=>'gia-duoi-1-trieu'],
            ['name'=>'Giá từ 1 triệu đến 2 triệu','parent_cate'=>64,'slug'=>'gia-tu-1-trieu-den-2-trieu'],//52
            ['name'=>'Giá từ 2 triệu đến 3 triệu','parent_cate'=>64 ,'slug' => 'gia-tu-2-trieu-den-3-trieu'],//53
            ['name'=>'Giá từ 3 triệu đến 4 triệu','parent_cate'=>64 ,'slug' => 'gia-tu-3-trieu-den-4-trieu'],//54
            ['name'=>'Giá từ 4 triệu đến 5 triệu','parent_cate'=>64,'slug'=>'gia-tu-4-trieu-den-5-trieu'],//52
            ['name'=>'Giá trên 5 triệu','parent_cate'=>64,'slug' => 'gia-tren-5-trieu'],//70


            ['name'=>'Độ phân giải','parent_cate'=>3 ,'slug' => 'do-phan-giai'],//71
            ['name'=>'HD 720p','parent_cate'=>71,'slug' => 'hd-720p'],//54
            ['name'=>'Full HD 1080p','parent_cate'=>71,'slug'=>'full-hd-1080p'],//52
            ['name'=>'2K 1440p','parent_cate'=>71,'slug' => '2k-1440p'],//74

            ['name'=>'Tần số quét','parent_cate'=>3 ,'slug' => 'tan-so-quet'],//75
            ['name'=>'60Hz','parent_cate'=>75 ,'slug' => '60hz'],//75
            ['name'=>'75Hz','parent_cate'=>75 ,'slug' => '75hz'],//49
            ['name'=>'100Hz','parent_cate'=>75 ,'slug' => '100hz'],//50
            ['name'=>'144Hz','parent_cate'=>75,'slug' => '144hz'],//79


            ['name'=>'Kích thước','parent_cate'=>3 ,'slug' => 'kich-thuoc'],//80
            ['name'=>'Màn hình 22 inch','parent_cate'=>80 ,'slug' => 'man-hinh-22-inch'],//75
            ['name'=>'Màn hình 24 inch','parent_cate'=>80 ,'slug' => 'man-hinh-24-inch'],//49
            ['name'=>'Màn hình 27 inch','parent_cate'=>80,'slug' => 'man-hinh-27-inch'],//50
            ['name'=>'Màn hình 32 inch','parent_cate'=>80,'slug' => 'man-hinh-32-inch'],//84


            ['name'=>'Màn hình cong','parent_cate'=>3 ,'slug' => 'man-hinh-cong'],//85
            ['name'=>'Phụ kiện màn hình','parent_cate'=>3 ,'slug' => 'phu-kien-man-hinh'],//86
            ['name'=>'Giá treo màn hình','parent_cate'=>86 ,'slug' => 'gia-treo-man-hinh'],//75
            ['name'=>'Phụ kiện dây HDMI, VGA, DP ','parent_cate'=>86 ,'slug' => 'phu-kien-day-hdmi-vga-dp'],//49
            ['name'=>'Phụ kiện dây mạng LAN','parent_cate'=>86 ,'slug' => 'phu-kien-day-mang-lan'],//50
        ], 'slug');
        DB::table('categories')->upsert([
            ['name' => 'VGA-Card màn hình','parent_cate'=>2,'slug' => 'vga-card-man-hinh'], //90
            ['name' => 'Case-Vỏ máy tính','parent_cate'=>2,'slug' => 'case-vo-may -tinh'],//91
        ],'slug');
    }
}
