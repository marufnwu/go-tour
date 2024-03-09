<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table= 'activity';
    
    public function relatedTour() {
        return $this->belongsTo(Gti::class, 'gti', 'id');
    }
}
