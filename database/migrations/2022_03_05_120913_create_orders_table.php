<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->unsigned();

            $table->string('colors');
            $table->string('dimensions');
            $table->string('unit');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('note')->nullable();
            $table->string('page_url')->nullable();
            $table->string('status')->default('pending');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('admins');

            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};
