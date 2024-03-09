<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generate_brochure extends Model
{
    use HasFactory;

    public function tleader() {
        return $this->belongsTo(Tourleader::class, 'tour_leader_id', 'id');
    }
}
