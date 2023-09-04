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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();
            $table->string('relationship')->nullable();
            $table->unsignedBigInteger('designation_id')->nullable();//
            $table->unsignedBigInteger('subject_id')->nullable();//
            $table->date('join_date')->nullable();
            $table->date('dob')->nullable();
            $table->string('cv')->nullable();
            $table->string('gender')->nullable();
            $table->unsignedBigInteger('blood_group_id')->nullable();//
            $table->longText('message')->nullable();
            $table->unsignedBigInteger('nid')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
