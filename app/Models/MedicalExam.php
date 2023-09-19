<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalExam extends Model
{
    use HasFactory;

    protected $fillable = [
            'age',
            'gender',
            'chief_complaint',
            'medical_history',
            'vitals',
            'skyway_id_1',
            'skyway_id_2',
        ];




    public function request()
{
    return $this->belongsTo(Request::class);
}

}
