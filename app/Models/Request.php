<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_user_id',
        'accept_user_id',
        'medical_exams_id',
        'request_message',
        'request_type',
        'request_status',
    ];

     public function users()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * リクエストを受けたユーザーへのリレーション
     */
   public function medical_exam()
{
    return $this->hasOne(MedicalExam::class);
}
}
