<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPasswordColumnInUsersTable extends Migration
{
    /**
     * マイグレーションを実行します。
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password', 255)->change(); // 変更したいサイズに設定
        });
    }

    /**
     * マイグレーションをロールバックします。
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password', 20)->change(); // 元のサイズに戻す
        });
    }
}

