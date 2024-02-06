<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',144);
            $table->text('article');
            $table->string("slug",144)->unique();
            $table->unsignedInteger('author_id');
            $table->timestamp("date_published");
            $table->string("bannner_image");
            $table->boolean("enabled");
            $table->boolean("featured");
            $table->boolean("comments_enabled");
            $table->bigInteger("views");
            $table->timestamps();

            //$table->foreign('author_id')->references('id')->on('blog_author');  

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post');
    }
};
