<?php

namespace App\Models;

use App\Models\Finance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Installment extends Model
{
    use HasFactory;



    protected $fillable = [
    'installment_value',
    'installment_month',
    'customer_id',
    'unit_id',
    'property_id',
    'main_project_id',
    'construction_id',
    'level_id',
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
    
    public function finance() {
        return $this->belongsT(Finance::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
     
    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
