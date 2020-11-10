<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->enum('role', ['Administrator', 'Dosen', 'Scrum Master', 'Product Owner', 'Mahasiswa']);
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('email', 50)->unique()->nullable();
            $table->text('foto')->nullable();
            $table->string('no_hp', 15)->unique()->nullable();
            $table->integer('fingerprint_pin')->unique()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
