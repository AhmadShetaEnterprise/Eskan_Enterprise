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
        'payment_value',
        'residual',
        'discount',
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

        public function customer() {
            return $this->belongsTo(Customer::class, 'customer_id', 'id');
        }

        public function unit() {
            return $this->belongsTo(Unit::class, 'unit_id', 'id');
        }
        
        public function paymentKind() {
            return $this->belongsTo(PaymentKind::class, 'payment_kind_id', 'id');
        }

}
