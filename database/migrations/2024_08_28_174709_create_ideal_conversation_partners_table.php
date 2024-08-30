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
        Schema::create('ideal_conversation_partners', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['理系','文系', '同学年', '同性','誰でも']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideal_conversation_partners');
    }
};
