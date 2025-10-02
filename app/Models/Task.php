<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = ['description', 'status_id']; 

    public function DetailsTask()
    {
        return $this->hasOne(DetailsTask::class);
    }
}
