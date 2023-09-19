<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
     {
        Schema::create('medical_exams', function (Blueprint $table) {
            $table->id(); //各検査
            $table->integer('age');
            $table->string('gender');
            $table->string('chief_complaint');
            $table->string('medical_history');
            $table->string('vitals')->nullable();
            $table->string('skyway_id_1')->nullable();
            $table->string('skyway_id_2')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_exams');
    }
};
