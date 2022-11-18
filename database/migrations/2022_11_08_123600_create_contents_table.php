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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('home_name')->nullable();
            $table->string('home_content')->nullable();
            $table->string('home_about')->nullable();
            $table->string('home_title')->nullable();
            $table->string('home_content2')->nullable();
            $table->string('projects_content')->nullable();
            $table->string('blog_title1')->nullable();
            $table->string('blog_title2')->nullable();
            $table->string('blog_content1')->nullable();
            $table->string('blog_content2')->nullable();
            $table->string('about_name')->nullable();
            $table->string('about_content')->nullable();
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
        Schema::dropIfExists('contents');
    }
};
