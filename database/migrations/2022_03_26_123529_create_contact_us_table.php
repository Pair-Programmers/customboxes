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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('subject');
            $table->longText('message');
            $table->longText('our_comment')->nullable();
            $table->string('status')->default('Not Reviewed');

            $table->bigInteger('admin_id')->unsigned()->nullable();// query handled by
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
        Schema::dropIfExists('contact_us');
    }
};
