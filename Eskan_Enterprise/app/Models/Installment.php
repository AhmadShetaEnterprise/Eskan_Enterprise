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

    public function finance() {
        return $this->belongsT(Finance::class);
    }
}
