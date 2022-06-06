<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Construction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'property_id',
        'main_project_id',
        'construction_id',
        'level_id',
        'site',
        'space',
        'price_m',
        'unit_price',
        'unitDescription',
        'status',
        'customer_id',
    ];

    public function properties() {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function main_projects() {
        return $this->belongsTo(MainProject::class, 'main_project_id', 'id');
    }

    public function constructions() {
        return $this->belongsTo(Construction::class, 'construction_id', 'id');
    }

    public function customers() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id')->withDefault(
            ['name'=> 'لا يوجد']
        );
    }

    public function levels() {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }

    public function payments() {
        return $this->hasMany(Payment::class, 'unit_id', 'id');
    }

    public function installments() {
        return $this->hasMany(Installment::class, 'unit_id', 'id');
    }

    public function unitStatusDates()
    {
        return $this->belongsToMany(UnitStatusDate::class);
    }
    
    public function finance() {
        return $this->belongsTo(Finance::class, 'finance_id', 'id');
    }
}
