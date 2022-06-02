<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'location';
    protected $fillable = ['NO_PROP','NAMA_PROP','NO_KAB','NAMA_KAB','NO_KEC','NAMA_KEC','NO_KEL','NAMA_KEL'];
}
