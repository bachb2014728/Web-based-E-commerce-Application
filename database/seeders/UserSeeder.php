<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name'=>'Lê Ạc Min',
                'phone'=>'0774158016',
                'address'=>'123 đường Quang Trung, TP.HCM',
                'birthday'=> '2002-01-01',
                'gender'=>0,
                'email'=>'admin@gmail.com',
                'password'=> Hash::make('admin'),
                'role' => 1],

            ['name'=>'Vân Anh',
                'email'=>'vanA@gmail.com',
                'address'=>'123 đường Nguyễn Huệ, TP.HCM',
                'gender'=>1,
                'phone'=>'0123456789',
                'birthday'=> '2002-01-01',
                'password'=> Hash::make('vanA123'),
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'role'=>0, 'job' => 'Sinh viên'],
        ];
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
