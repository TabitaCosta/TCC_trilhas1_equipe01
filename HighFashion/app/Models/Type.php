<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Type extends Model
{
    use HasFactory;
    public function Products(): HasOne
    {
        return $this->hasOne(Products::class);
    }
}
