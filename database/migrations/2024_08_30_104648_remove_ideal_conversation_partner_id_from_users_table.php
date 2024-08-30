<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveIdealConversationPartnerIdFromUsersTable extends Migration
{
    /**
     * マイグレーションを実行します。
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ideal_conversation_partner_id');
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
            $table->bigInteger('ideal_conversation_partner_id')->nullable();
        });
    }
}

