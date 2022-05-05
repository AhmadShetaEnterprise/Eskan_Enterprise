<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'property_id',
    ];

    public function property() {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function construction() {
        return $this->hasMany(Construction::class, 'mainProject_id', 'id');
    }

    public function unit() {
        return $this->hasMany(Unit::class, 'mainProject_id', 'id');
    }

}
