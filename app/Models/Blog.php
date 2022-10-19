<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Jalali(){
        return verta($this->created_at)->format('d F Y');
    }

    public function user(){
        return $this->belongsTo(User::class ,'user_id');
    }
}
