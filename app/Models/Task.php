<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = ['description', 'status_id']; 

    public function DetailsTask()
    {
        return $this->hasOne(DetailsTask::class);
    }

    public function category() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function categoryForDetail() : BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
}   
