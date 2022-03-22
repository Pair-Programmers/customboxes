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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name');
            $table->string('style');
            $table->longText('description')->nullable();
            $table->string('slug', 255)->unique();
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->longText('meta_tags')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('image_alt_1')->nullable();
            $table->string('image_alt_2')->nullable();
            $table->string('image_alt_3')->nullable();
            $table->string('image_alt_4')->nullable();
            $table->string('image_alt_5')->nullable();

            $table->boolean('is_active')->default(true);

            $table->bigInteger('industry_id')->unsigned();
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->bigInteger('admin_id')->unsigned();
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
        Schema::dropIfExists('products');
    }
};
