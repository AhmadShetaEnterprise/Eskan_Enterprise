<?php

namespace App\Models;

use App\Models\MainProject;
use App\Models\UnitStatusDate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'phone',
        'email',
        'image',
        'privilege_id',
        'password',
    ];

    public function constructions()
    {
        return $this->belongsToMany(Construction::class, 'construction_customer', 'construction_id', 'customer_id', 'id', 'id');
    }

    public function unitStatusDates()
    {
        return $this->belongsToMany(UnitStatusDate::class);
    }

    public function main_projects()
    {
        return $this->belongsToMany(MainProject::class);
    }

    public function units() {
        return $this->hasMany(Unit::class, 'customer_id', 'id');
    }

    
    public function payments() {
        return $this->hasMany(Payment::class, 'customer_id', 'id');
    }

    
    public function installments() {
        return $this->hasMany(Installment::class, 'customer_id', 'id');
    }
        
    public function paymentKinds() {
        return $this->belongsToMany(PaymentKind::class);
    }
   
    public function finances() {
        return $this->belongsToMany(Finance::class);
    }
   
    public function privilege() {
        return $this->belongsTo(Privilege::class, 'privilege_id', 'id');
    }

}
