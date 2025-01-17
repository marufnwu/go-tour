<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_category_id',
        'name',
        'description',
        'slug',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(DestinationCategory::class, 'destination_category_id');
    }

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
