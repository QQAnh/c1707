<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function scopeOfType($query, $type)
    {
        return $query->where('category', $type);
    }
}
