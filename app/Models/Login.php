<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id_pelanggan';
    protected $guarded = [];
    public $timestamps = false;
}
