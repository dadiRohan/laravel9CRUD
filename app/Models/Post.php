<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','description'];

    /*
    * Post Comments
    */
    // public function comments()
    // {
    //     return $this->hasMany(class::Comment, 'post_id', 'id');
    // }    
}
