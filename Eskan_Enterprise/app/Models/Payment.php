<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'unit_coast',
        'finances_name',
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
}
