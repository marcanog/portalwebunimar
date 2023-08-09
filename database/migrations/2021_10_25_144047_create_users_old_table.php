<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersOldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_old', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamps();
            $table->char('document_id', 20);
            $table->char('name', 255);
            $table->char('email', 50)->unique();
            $table->date('birth');
            $table->char('phone',15);
            $table->char('password', 255);
            $table->string('image', 255)->default('user.png');
            $table->string('role_id', 255);
            $table->foreignId('status_id')->references('id')->on('status');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_old');
    }
}
