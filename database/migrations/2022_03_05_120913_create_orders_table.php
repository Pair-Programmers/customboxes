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

            $table->integer('height');
            $table->integer('width');
            $table->integer('depth');
            $table->string('unit');
            $table->string('material');
            $table->string('color');
            $table->integer('qty_1');
            $table->integer('qty_2')->nullable();
            $table->json('addons')->nullable();
            $table->string('box_design_file')->nullable();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone')->nullable();
            $table->longText('customer_note')->nullable();
            $table->string('page_url')->nullable();
            $table->string('qoute_form')->nullable();
            $table->string('status')->default('Pending');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins');

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
