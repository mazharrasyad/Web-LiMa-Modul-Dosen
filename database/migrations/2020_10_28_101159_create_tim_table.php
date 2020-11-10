<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tim', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('semester', 5);
            $table->enum('prodi', ['Teknik Informatika', 'Sistem Informasi']);
            $table->double('nilai', 3, 2);
            $table->unsignedBigInteger('scrum_master_id');
            $table->foreign('scrum_master_id')->references('id')->on('users'); 
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('project'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tim');
    }
}
