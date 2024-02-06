<?php

namespace App\Persistance\Models;

use Illuminate\Database\Eloquent\Model;
use App\Persistance\Models\Post;

class Tag extends Model
{
    public $table = 'blog_tag';
    public $timestamps = null;

    public function posts(){
        return $this->belongsTo(Post::class , 'post_id', "id", Tag::class);
    }
    
}
