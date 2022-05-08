<?php

namespace App\Models;

use App\Models\Construction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // public function construction() {
    //     return $this->belongsToMany(Construction::class);
    // }

    public function units() {
        return $this->hasMany(Level::class, 'level_id', 'id');
    }
}
