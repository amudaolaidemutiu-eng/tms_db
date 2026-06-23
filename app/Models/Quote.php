<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    // ADD THIS LIST - This tells Laravel it is safe to save these fields
    protected $fillable = [
        'name',
        'email',
        'phone',
        'freight_type',
        'origin',
        'destination',
        'message',
        'project_file'
    ];
}