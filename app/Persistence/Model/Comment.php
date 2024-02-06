<?php

namespace App\Persistance\Models;

use Illuminate\Database\Eloquent\Model;
use App\Persistance\Models\Post;

class Comment extends Model
{
    /*public $table = 'blog_tag';
    public $timestamps = null;*/

    public function posts(){
        return $this->belongsTo(Post::class , 'post_id', "id", Comment::class);
    }
    
    public function parent(){
        return $this->belongsTo(Comment::class , 'is_reply_to', "id", Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class , 'user_id', "id", Comment::class);
    }
}
