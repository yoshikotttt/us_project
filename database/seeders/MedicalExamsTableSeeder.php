<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medical_exams = [
            [
                'age' => 30,
                'gender' => '男性',
                'chief_complaint' => '頭痛',
                'medical_history' => '高血圧',
                'vitals' => '120/80',
                'skyway_id_1' => 'ABCD1234',
                'skyway_id_2' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'age' => 25,
                'gender' => '女性',
                'chief_complaint' => '腹痛',
                'medical_history' => '過敏性腸症候群',
                'vitals' => 'N/A',
                'skyway_id_1' => 'EFGH5678',
                'skyway_id_2' => 'IJKL9012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'age' => 45,
                'gender' => '女性',
                'chief_complaint' => '胸痛',
                'medical_history' => '冠動脈疾患',
                'vitals' => '140/90',
                'skyway_id_1' => 'MNOP5678',
                'skyway_id_2' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'age' => 50,
                'gender' => '男性',
                'chief_complaint' => '関節痛',
                'medical_history' => '関節リウマチ',
                'vitals' => 'N/A',
                'skyway_id_1' => 'QRST1234',
                'skyway_id_2' => 'UVWX5678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
          foreach ( $medical_exams as  $medical_exams) {
            DB::table('medical_exams')->insert($medical_exams);
    }
}
}