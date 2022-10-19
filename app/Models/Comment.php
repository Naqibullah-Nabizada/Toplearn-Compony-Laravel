<?php

namespace App\Models;

use Faker\Core\Blood;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function blog(){
        return $this->belongsTo(blog::class, 'blog_id');
    }
}
