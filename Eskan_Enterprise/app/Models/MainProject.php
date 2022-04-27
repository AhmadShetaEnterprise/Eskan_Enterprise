<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainProject extends Model
{
    use HasFactory;

    public function property() {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function project() {
        return $this->hasMany(Construction::class, 'property_id', 'id');
    }

}
