<?php

namespace App\Persistance\Models;

use Illuminate\Database\Eloquent\Model;
use App\Persistance\Models\Post;

class Category extends Model
{
    public $table = 'blog_category';
    const UPDATED_AT = null;

  
    public function posts(){
       
        return $this->belongsToMany(Post::class , "blog_post_to_category", "category_id" ,  'post_id', Category::class);
    }
    
    
}
