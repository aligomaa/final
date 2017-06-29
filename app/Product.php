<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class Product extends Model
{
    public function profile()
    {
        return $this->belongsTo(Profiler::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
