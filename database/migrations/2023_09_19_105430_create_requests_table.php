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
         Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_user_id');
            $table->unsignedBigInteger('accept_user_id');
            $table->unsignedBigInteger('medical_exams_id');
            $table->text('request_message')->nullable();
            $table->string('request_type')->nullable();
            $table->string('request_status')->nullable();
            $table->timestamps();

            $table->foreign('request_user_id')->references('id')->on('users');
            $table->foreign('accept_user_id')->references('id')->on('users');
            $table->foreign('medical_exams_id')->references('id')->on('medical_exams');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
