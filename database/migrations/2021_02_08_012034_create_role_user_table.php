<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('role_id'); // replaced by foreignId line
            //$table->unsignedBigInteger('user_id'); // replaced by foreignId line
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            //$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade'); // replaced by foreignId line
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // replaced by foreignId line
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
