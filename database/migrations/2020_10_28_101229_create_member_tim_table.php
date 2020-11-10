<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_tim', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tim_id');
            $table->foreign('tim_id')->references('id')->on('tim'); 
            $table->unsignedBigInteger('mahasiswa_id');
            $table->foreign('mahasiswa_id')->references('id')->on('users'); 
            $table->string('peran', 50);
            $table->text('tanggung_jawab');
            $table->double('nilai', 3, 2);
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
        Schema::dropIfExists('member_tim');
    }
}
