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
            $table->string('firstName');
            $table->string('lastName');
            $table->string('avatar')->default('default.jpg');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->boolean('show_Address')->default(0);
            $table->boolean('isActive')->default(1);
            $table->boolean('newsletter')->default(0);
            $table->string('user_type')->default('user');
            $table->timestamp('email_verified_at')->nullable();
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
