<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Costumers extends Model
{
    use HasFactory;

    public function address() : MorphOne
    {
        return $this->morphOne(Addresses::class, 'addressable');
    }
}
