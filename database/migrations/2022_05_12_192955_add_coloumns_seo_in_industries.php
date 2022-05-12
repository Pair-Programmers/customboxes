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
        Schema::table('industries', function (Blueprint $table) {
            $table->longText('meta_tag_title')->nullable()->after('is_industry');
            $table->longText('meta_tag_keywords')->nullable()->after('meta_tag_title');
            $table->longText('meta_tag_description')->nullable()->after('meta_tag_keywords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('industries', function (Blueprint $table) {
            //
        });
    }
};
