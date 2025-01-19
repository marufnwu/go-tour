<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'number',
        'name',
        'map',
        'duration',
        'arrival_city',
        'departure_city',
        'min_price',
        'max_price',
        'banner_image',
        'slug',
        'travel_strat_at',
        'travel_end_at',
        'booking_start_at',
        'booking_end_at',
        'is_active',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function arrivalCity()
    {
        return $this->belongsTo(City::class, 'arrival_city');
    }

    public function departureCity()
    {
        return $this->belongsTo(City::class, 'departure_city');
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'tour_countries');
    }

    public function itineraries()
    {
        return $this->hasMany(TourItinerary::class)->orderBy("day_no");
    }

    public function getMapUrlAttribute()
    {
        return asset($this->map);
    }

    public function getBannerImageUrlAttribute()
    {
        return asset($this->banner_image);
    }

    public function getTravelStratAtAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('Y-m-d') : null;
    }
    public function getTravelEndAtAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('Y-m-d') : null;
    }
    public function getBookingStartAtAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('Y-m-d') : null;
    }
    public function getBookingEndAtAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('Y-m-d') : null;
    }
}
