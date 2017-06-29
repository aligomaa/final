<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function government()

    {
        return $this->hasMany(Government::class);
    }
}
