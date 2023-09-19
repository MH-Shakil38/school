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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('bn_name')->nullable();
            $table->string('en_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('eiin')->nullable();
            $table->string('code')->nullable();
            $table->string('logo')->nullable();
            $table->longText('map')->nullable();
            $table->string('full_address')->nullable();
            $table->longText('details')->nullable();
            $table->date('establish')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
