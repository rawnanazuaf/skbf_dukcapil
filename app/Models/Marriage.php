<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    use HasFactory;
    protected $table = 'marriage';
    protected $fillable = ['ID_STATUS_KAWIN','STATUS_KAWIN'];
}
