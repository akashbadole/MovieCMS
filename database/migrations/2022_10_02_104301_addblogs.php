<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addblogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
        Schema::create('Addblogs', function (Blueprint $table) {
            $table->id("blog_id");
            $table->string("blog_category");
            $table->string("blog_title");
            $table->string("blog_author");
            $table->text("blog_desc");
            $table->string("blog_pic");
            $table->timestamps();
        });
    } 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
