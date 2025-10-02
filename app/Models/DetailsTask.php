<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsTask extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'description'];

    protected $table = 'details_task';

    public function task() 
    {
        return $this->belongsTo(Task::class);
    }
}
