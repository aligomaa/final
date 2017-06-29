<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
