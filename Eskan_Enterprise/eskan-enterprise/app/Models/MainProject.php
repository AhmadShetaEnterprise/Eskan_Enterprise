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

    protected $hidden = ['created_at', 'updated_at'];

    public function properties() {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function constructions() {
        return $this->hasMany(Construction::class, 'main_project_id', 'id');
    }

    public function units() {
        return $this->hasMany(Unit::class, 'main_project_id', 'id');
    }
    
    
    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
    
    public function installments() {
        return $this->hasMany(Installment::class, 'main_project_id', 'id');
    }

}
