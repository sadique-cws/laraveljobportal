<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;


    public function role()
    {
        return $this->hasOne('App\Models\role','id','role_id');
    }
    public function company()
    {
        return $this->hasOne('App\Models\company','id','company_id');
    }
}
