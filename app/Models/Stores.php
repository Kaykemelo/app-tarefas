<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Stores extends Model
{
    use HasFactory;

    public function address() : MorphOne
    {
        return $this->morphOne(Addresses::class, 'addressable');
    }

    public function notes() : MorphMany
    {
        return $this->morphMany(Notes::class, 'notable');
    }

    public function tools() : MorphToMany
    {
        return $this->morphToMany(Tool::class, 'toolable');
    }
}
