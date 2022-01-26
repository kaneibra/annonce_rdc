<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('commune_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id')->default(0);
            $table->date('limit');
            $table->string('condition_price');
            $table->string('condition_product');
            $table->integer('price');
            $table->string('image');
            $table->boolean('active')->default(false);
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('commune_id')->references('id')->on('communes');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('annonces');
    }
}
