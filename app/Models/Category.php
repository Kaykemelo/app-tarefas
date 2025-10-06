<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public function tasks() : BelongsToMany
    {
        return $this->belongsToMany(Task::class);
    }

    public function details() : HasOneThrough
    {
        return $this->hasOneThrough(DetailsTask::class, Task::class );   
    }

    public function taskForDetail() : HasOne
    {
        return $this->hasOne(Task::class);
    } 

    public function detailsThroughTasks() : HasManyThrough
    {
        return $this->hasManyThrough(DetailsTask::class, Task::class);
    }
}
