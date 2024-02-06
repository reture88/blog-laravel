<?php

namespace App\Persistance\Models;

use Illuminate\Database\Eloquent\Model;
use App\Persistance\Models\Post;

class Author extends Model
{
    public $table = 'blog_author';
    public $timestamps = null;

  
    public function posts(){
        return $this->hasMany(Post::class , 'author_id', "id");
    }
    
}
