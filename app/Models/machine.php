<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class machine extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\category');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function picture()
    {
        return $this->hasMany('App\Models\picture');
    }

    public function manufacturer()
    {
        return $this->hasMany('App\Models\manufacturer');
    }
}
