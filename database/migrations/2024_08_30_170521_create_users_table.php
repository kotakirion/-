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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 50);
            $table->string('password', 20);
            $table->string('name', 20);
            $table->enum('major_subject',['文系', '理系']);
            $table->integer('grade')->unsigned();
            $table->integer('gender')->unsigned();
            $table->foreignId('purpose_id')->constrained();
            $table->foreignId('university_id')->constrained();
            $table->foreignId('ideal_conversation_partner_id')->constrained();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
