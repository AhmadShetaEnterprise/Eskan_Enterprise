<?php

namespace App\Models;

use App\Models\Level;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Construction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'property_id',
        'main_project_id',
        'levels',
        'units',
        'total_units',
        'coast',
    ];


        /**
     * The users that belong to the role.
     */
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'construction_customer', 'construction_id', 'customer_id', 'id', 'id');
    }

    public function properties() {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function main_projects() {
        return $this->belongsTo(MainProject::class, 'main_project_id', 'id');
    }

    // public function levels() {
    //     return $this->belongsToMany(Level::class);
    // }

    public function units() {
        return $this->hasMany(Unit::class, 'construction_id', 'id')->withDefault([
            'status'=>'خالية'
        ]);
    }

    
    public function installments() {
        return $this->hasMany(Installment::class, 'construction_id', 'id');
    }



}
