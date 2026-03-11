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
        Schema::create('board_member', function (Blueprint $table) {
            $table->id();
            $table->foreignId('masjid_id')->constrained('masjid')->onDelete('cascade');
            $table->string('name');
            $table->string('phone_number');
            $table->string('position');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board_member');
    }
};
