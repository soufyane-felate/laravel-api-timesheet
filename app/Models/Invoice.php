<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'project',
        'client',
        'timeIn',
        'timeOut',
        'hourlyRate',
        'workingHours',
        'amount',
        'formattedDateTime',
        'uniqueCode',
    ];
}
