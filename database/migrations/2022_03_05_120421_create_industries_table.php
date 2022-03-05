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
        Schema::create('industries', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('summary')->nullable();
            $table->string('image')->default('banner.png');
            $table->longText('description')->nullable();

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
        Schema::dropIfExists('industries');
    }
};
