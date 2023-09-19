<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                 'name' => '手嶋',
                'email' => 'user1@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 1,
                'specialty' => '内科',
                'qualification_year_1' => '超音波専門医（関西） 腹部/上腹部',
                'qualification_year_2' => '2021',
                'notes' => 'Notes for User1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 'name' => '田中',
                'email' => 'user2@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 1,
                'specialty' => '消化器',
                'qualification_year_1' => '超音波検査士（九州） 腹部/上腹部/下腹部',
                'qualification_year_2' => '2022',
                'notes' => 'Notes for User2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 'name' => '小林',
                'email' => 'user3@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 0,
                'specialty' => '外科',
                'qualification_year_1' => '超音波検査士（四国） 腹部/上腹部/下腹部',
                'qualification_year_2' => '2020',
                'notes' => 'Notes for User3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '佐藤',
                'email' => 'user4@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 0,
                'specialty' => '内科',
                'qualification_year_1' => '超音波検査士（九州） 腹部/上腹部/下腹部',
                'qualification_year_2' => '2019',
                'notes' => 'Notes for User4',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ここに必要なユーザーを追加してください
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
