<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tool extends Model
{
    use HasFactory;

    public function costumers() : MorphToMany
    {
        return $this->morphedByMany(Costumers::class , 'toolable');
    }

    public function stores() : MorphToMany
    {
        return $this->morphedByMany(Stores::class, 'toolable');
    }
}
