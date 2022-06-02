<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $table = 'profession';
    protected $fillable = ['ID_JENIS_PKRJN','JENIS_PKRJN'];
}
