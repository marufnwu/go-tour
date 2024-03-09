<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airticket extends Model
{
    use HasFactory;

    protected $table= 'airline_ticket';

    public function psngr() {
        return $this->belongsTo(passengerInformations::class, 'passenger_id', 'id');
    }

    public function departureCity() {
        return $this->belongsTo(Airport::class, 'city_of_depart', 'id');
    }

    public function arrivalCity() {
        return $this->belongsTo(Airport::class, 'city_of_arrival', 'id');
    }

    public function Airline() {
        return $this->belongsTo(Supplier::class, 'airline', 'id');
    }
}
