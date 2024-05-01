<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'selectedProject',
        'client'
        
    ];
}
