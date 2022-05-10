<?php

namespace App\Models;

use App\Models\Installment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finance extends Model
{
    use HasFactory;

    public function installment() {
        return $this->hasMany(Installment::class);
    }
}
