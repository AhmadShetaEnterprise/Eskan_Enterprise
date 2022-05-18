<?php

namespace App\Models;

use App\Models\Installment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finance extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'name',
        'space_payment',
        'licences_payment',
        'start_payment',
        'recieving_payment',
    ];

    public function payments() {
        return $this->hasMany(Payment::class, 'finance_id', 'id');
    }

    public function units() {
        return $this->hasMany(Unit::class, 'finance_id', 'id');
    }
}
