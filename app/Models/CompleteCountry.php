<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompleteCountry extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];
}
