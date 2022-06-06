<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function customers()
    {
        return $this->belongsToMany(customer::class);
    }

    public function main_projects() {
        return $this->hasMany(MainProject::class, 'property_id', 'id');
    }

    public function unit() {
        return $this->hasMany(Unit::class, 'property_id', 'id');
    }

    public function installments() {
        return $this->hasMany(Installment::class, 'property_id', 'id');
    }


}
