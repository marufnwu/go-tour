<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourItinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'dayitinerary_id',
        'day_no',
        'title',
        'image',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function dayItinerary()
    {
        return $this->belongsTo(Dayitinerary::class);
    }
}
