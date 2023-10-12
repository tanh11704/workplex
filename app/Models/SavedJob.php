<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
{
    use HasFactory;

    protected $table = 'savedjob';
    protected $primaryKey = 'id';

    protected $fillable = [
        'job_id',
        'user_id',
    ];

    public $timestamps = true;
}
