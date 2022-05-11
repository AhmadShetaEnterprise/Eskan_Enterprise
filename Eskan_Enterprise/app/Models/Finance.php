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

    public function installment() {
        return $this->hasMany(Installment::class);
    }
}
