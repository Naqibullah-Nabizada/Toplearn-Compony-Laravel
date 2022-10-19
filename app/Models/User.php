<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use function PHPUnit\Framework\returnSelf;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'mobile',
        'email',
        'password',
        'role'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function change_user_role_to_farsi()
    {
        if ($this->role === 'user') return 'کاربر عادی';
        if ($this->role === 'author') return 'نویسنده';
        if ($this->role === 'admin') return 'مدیر سایت';
    }

    public function Jalali(){
        return verta($this->created_at)->format('Y/m/d');
    }
}
