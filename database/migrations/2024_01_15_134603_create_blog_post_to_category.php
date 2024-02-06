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
        Schema::create('blog_post_to_category', function (Blueprint $table) {
            $table->unsignedInteger("post_id");
           
            $table->unsignedInteger('category_id'); 
         
            $table->primary(["post_id", "category_id"]); 
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::table('blog_post_to_category', function (Blueprint $table) {
            $table->dropForeign('blog_post_to_category_category_id_foreign');
            $table->dropForeign('blog_post_to_category_post_id_foreign');
        });*/
        Schema::dropIfExists('blog_post_to_category');
    }
};
