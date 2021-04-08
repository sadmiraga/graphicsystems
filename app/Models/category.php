<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    public function machine()
    {
        return $this->hasMany('App\Models\machine');
    }
    use HasFactory;
}
