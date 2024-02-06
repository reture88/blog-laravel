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
        Schema::table('blog_post_to_category', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('blog_category');  
            $table->foreign('post_id')->references('id')->on('blog_post');
        });

        Schema::table('blog_tag', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('blog_post');  
        });

        Schema::table('blog_comment', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('blog_post');  
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('blog_related', function (Blueprint $table) {
            $table->foreign('blog_post_id')->references('id')->on('blog_post');  
        });
        Schema::table('blog_post', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('blog_author');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_post_to_category', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            //$table->dropIndex('blog_post_to_category_category_id_foreign');
            $table->dropForeign(['post_id']);
            //$table->dropIndex('blog_post_to_category_post_id_foreign');
        });
        Schema::table('blog_tag', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            //$table->dropIndex('blog_tag_post_id_foreign');
        });

        Schema::table('blog_comment', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            //$table->dropIndex('blog_comment_post_id_foreign');
            $table->dropForeign(['user_id']);
            //$table->dropIndex('blog_comment_user_id_foreign');
        });

        Schema::table('blog_related', function (Blueprint $table) {
            $table->dropForeign(['blog_post_id']);
            //$table->dropIndex('blog_related_blog_post_id_foreign');
        });
        Schema::table('blog_post', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            //$table->dropIndex('blog_post_author_id_foreign');
        });
    }
};
