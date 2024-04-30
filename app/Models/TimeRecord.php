<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeRecord extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'selectedProject',
        'client',
        'timeIn',
        'timeOut',
        'break',
        'workingHours',
        'hourlyRate',
        'description',
        'notes',
        'status',
        'billable',
    ];
}
