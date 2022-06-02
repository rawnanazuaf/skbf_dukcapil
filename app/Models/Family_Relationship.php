<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family_Relationship extends Model
{
    use HasFactory;
    protected $table = 'family_relationship';
    protected $fillable = ['ID_STAT_HBKEL','STAT_HBKEL'];    
}
