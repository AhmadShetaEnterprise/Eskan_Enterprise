<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->hasMany(Property::class, 'property_id', 'id');
    }

    public function mainProject() {
        return $this->hasMany(MainProject::class, 'property_id', 'id');
    }


}
