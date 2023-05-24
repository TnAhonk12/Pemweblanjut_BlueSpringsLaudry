<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{

    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id_pelanggan';
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'username',
        'role', 
        'alamat',
        'no_hp',
        'email',
        'password',
    ];
}
