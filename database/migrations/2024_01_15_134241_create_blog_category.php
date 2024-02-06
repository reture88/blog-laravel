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
        Schema::create('blog_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 45);
            $table->string('slug', 45)->unique();
            $table->boolean('enabled')->default(true);
            $table->timestamp("created_at");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::table('blog_post_to_category', function (Blueprint $table) {
            $table->dropForeign('blog_post_to_category_category_id_foreign');
        });*/
        Schema::dropIfExists('blog_category');
    }
};
