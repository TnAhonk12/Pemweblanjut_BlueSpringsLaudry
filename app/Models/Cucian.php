<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cucian extends Model
{
    use HasFactory;
    protected $table = 'cucian';
    protected $primaryKey = 'id_cucian';
    protected $guarded = [];
    public $timestamps = false;
}
