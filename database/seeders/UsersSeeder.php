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
                 'name' => 'User1',
                'email' => 'user1@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 1,
                'specialty' => 'Specialty1',
                'qualification_year_1' => '2020',
                'qualification_year_2' => '2021',
                'notes' => 'Notes for User1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 'name' => 'User2',
                'email' => 'user2@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 1,
                'specialty' => 'Specialty2',
                'qualification_year_1' => '2019',
                'qualification_year_2' => '2022',
                'notes' => 'Notes for User2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 'name' => 'User3',
                'email' => 'user3@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 0,
                'specialty' => 'Specialty3',
                'qualification_year_1' => '2018',
                'qualification_year_2' => '2020',
                'notes' => 'Notes for User3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User4',
                'email' => 'user4@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'is_requester' => 0,
                'specialty' => 'Specialty4',
                'qualification_year_1' => '2017',
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
