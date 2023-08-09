<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
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
            $table->unsignedBigInteger('teacher_api_id')->nullable()->default(null);
            $table->unsignedBigInteger('student_api_id')->nullable()->default(null);
            $table->unsignedBigInteger('employee_api_id')->nullable()->default(null);
            $table->foreignId('status_id')->default(1)->references('id')->on('status');
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
