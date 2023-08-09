<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_documents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamps();
            $table->char('file', 255);
            $table->char('name', 255);
            $table->year('date');
            $table->foreignId('career_id')->references('id')->on('career');
            $table->foreignId('type_id')->references('id')->on('documents_type');
            $table->foreignId('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_documents');
    }
}
