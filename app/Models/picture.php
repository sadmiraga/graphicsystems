<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    public function machine()
    {
        return $this->belongsTo('App\Models\machine');
    }

    use HasFactory;
}
