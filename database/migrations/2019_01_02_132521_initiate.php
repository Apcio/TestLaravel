<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initiate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('accounts')) {
            Schema::create('accounts', function (Blueprint $table) {
                $table->increments('id_account');
                $table->string('login', 30);
                $table->string('name', 30);
                $table->string('surname', 30);
                $table->string('password', 100);
                $table->string('email', 50);
                $table->integer('id_mailbox')->unsigned();
            });
        }

        if (!Schema::hasTable('mailboxes')) {
            Schema::create('mailboxes', function (Blueprint $table) {
                $table->increments('id_mailbox');
                $table->string('title', 30);
                $table->string('account', 30);
                $table->string('smtp_server', 30);
                $table->integer('smtp_port');
                $table->string('pop3_server', 100);
                $table->integer('pop3_port');
                $table->string('password', 100);
                $table->boolean('fake');
            });
        }

        if (!Schema::hasTable('messages')) {
            Schema::create('messages', function (Blueprint $table) {
                $table->increments('id_message');
                $table->integer('id_mailbox')->unsigned();
                $table->integer('id_account')->unsigned();
                $table->string('to', 100);
                $table->string('subject', 200);
                $table->longText('body');
                $table->dateTime('time_send');
                $table->boolean('sended');
            });
        }

        Schema::table('accounts', function (Blueprint $table) {
            $table->foreign('id_mailbox')->references('id_mailbox')->on('mailboxes');
            $table->index('login');
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('id_mailbox')->references('id_mailbox')->on('mailboxes');
            $table->foreign('id_account')->references('id_account')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
        Schema::dropIfExists('accounts');
        Schema::dropIfExists('mailboxes');
    }
}
