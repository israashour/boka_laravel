<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id', 'name', 'description', 'price', 'image', 'sale', 'location', 'is_active', 'start_time', 'end_time',
    ];
}
