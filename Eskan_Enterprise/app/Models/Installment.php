<?php

namespace App\Models;

use App\Models\Finance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Installment extends Model
{
    use HasFactory;

    public function finance() {
        return $this->belongsT(Finance::class);
    }
}
