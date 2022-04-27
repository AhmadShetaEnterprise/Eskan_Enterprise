<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;

    public function property() {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function mainProject() {
        return $this->belongsTo(MainProject::class, 'mainProject_id');
    }

    public function project() {
        return $this->belongsTo(Construction::class, 'mainProject_id');
    }
}
