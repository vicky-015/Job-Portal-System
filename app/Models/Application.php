<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'job_id',
        'status',
        'resume'
    ];

     public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
