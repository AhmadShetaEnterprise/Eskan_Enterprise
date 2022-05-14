<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'unit_price',
        'finance_id',
        'space_payment',
        'licences_payment',
        'start_payment',
        'recieving_payment',
        'residual',
        'installments',
        'installment_value',
        'customer_id',
        'unit_id',
        'property_id',
        'main_project_id',
        'construction_id',
        'level_id',
        ];

        public function finance() {
            return $this->belongsTo(Finance::class, 'finance_id', 'id');
        }

}
