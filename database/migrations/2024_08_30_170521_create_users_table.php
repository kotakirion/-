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
            $table->string('password', 225);
            $table->string('name', 20);
            $table->enum('major_subject',['文系', '理系']);
            $table->integer('grade')->unsigned()->nullable();
            $table->enum('gender',['男性', '女性']);
            $table->foreignId('purpose_id')->nullable()->constrained();
            $table->foreignId('university_id')->nullable()->constrained();
            $table->timestamp('email_verified_at')->nullable()->constrained();
            $table->timestamps();
            $table->string('introduction', 300)->nullable();
            
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
