<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


        /**
     * The users that belong to the role.
     */
    public function customers()
    {
        return $this->belongsToMany(User::class, 'project_customer');
    }

    public function properties()
    {
        return $this->belongsTo(Property::class, 'properties');
    }
}
