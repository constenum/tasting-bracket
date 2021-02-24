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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('west1')->nullable();
            $table->string('west2')->nullable();
            $table->string('south1')->nullable();
            $table->string('south2')->nullable();
            $table->string('midwest1')->nullable();
            $table->string('midwest2')->nullable();
            $table->string('east1')->nullable();
            $table->string('east2')->nullable();
            $table->string('westfinal')->nullable();
            $table->string('southfinal')->nullable();
            $table->string('midwestfinal')->nullable();
            $table->string('eastfinal')->nullable();
            $table->string('semifinal1')->nullable();
            $table->string('semifinal2')->nullable();
            $table->string('final')->nullable();
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
