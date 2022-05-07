<?php

namespace App\Models;

use App\Models\MainProject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'phone',
        'email',
        'password',
    ];

    public function main_projects()
    {
        return $this->belongsToMany(MainProject::class);
    }

    public function units() {
        return $this->hasMany(Unit::class);
    }

}
