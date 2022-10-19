<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopHeader extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'mobile',
        'instagram',
        'facebook',
        'twitter',
    ];
}
