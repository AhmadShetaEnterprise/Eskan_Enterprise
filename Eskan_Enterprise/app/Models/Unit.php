<?php

namespace App\Models;

use App\Models\Customer;
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
        'total_price',
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
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function levels() {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }
}
