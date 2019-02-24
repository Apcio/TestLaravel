<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MailboxUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mailboxes', function (Blueprint $table) {
            $table->dropColumn('account');
            $table->string('login_mail', 30);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //no fully rollback migration
        Schema::table('mailboxes', function (Blueprint $table) {
            $table->string('account', 30);
            $table->dropColumn('login_mail');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
