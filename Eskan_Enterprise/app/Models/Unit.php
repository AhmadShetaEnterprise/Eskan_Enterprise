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
        'mainProject_id',
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

    public function property() {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function mainProject() {
        return $this->belongsTo(MainProject::class, 'mainProject_id', 'id');
    }

    public function construction() {
        return $this->belongsTo(Construction::class, 'construction_id', 'id');
    }

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function level() {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }
}
