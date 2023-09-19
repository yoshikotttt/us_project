<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $requests = [
            [
               'request_user_id' => 1,
                'accept_user_id' => 2,
                'medical_exams_id' => 1,
                'request_message' => 'Request 1 Message',
                'request_type' => 'Type 1',
                'request_status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'request_user_id' => 2,
                'accept_user_id' => 3,
                'medical_exams_id' => 2,
                'request_message' => 'Request 2 Message',
                'request_type' => 'Type 2',
                'request_status' => 'Accepted',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                 'request_user_id' => 3,
                'accept_user_id' => 4,
                'medical_exams_id' => 3,
                'request_message' => 'Request 3 Message',
                'request_type' => 'Type 1',
                'request_status' => 'Rejected',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 'request_user_id' => 4,
                'accept_user_id' => 1,
                'medical_exams_id' => 4,
                'request_message' => 'Request 4 Message',
                'request_type' => 'Type 2',
                'request_status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ここに必要なリクエストを追加してください
        ];

        foreach ($requests as $request) {
            DB::table('requests')->insert($request);
        }
    }
}
