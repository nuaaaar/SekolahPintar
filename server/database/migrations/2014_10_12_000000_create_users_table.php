<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->enum('role', ['admin', 'orang_tua', 'siswa', 'pemilik_kantin']);
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->text('reset_token')->nullable();
            $table->string('verified_code');
            $table->integer('status');
            $table->rememberToken();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('kelas_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
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
