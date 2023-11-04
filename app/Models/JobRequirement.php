<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequirement extends Model
{
    use HasFactory;

    protected $table = 'job_requirements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'job_id',
        'content',
    ];

    public $timestamps = true;

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
