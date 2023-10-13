<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experience';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
    ];

    public $timestamps = true;

    public static function getExperiences()
    {
        return static::pluck('title', 'id')->all();
    }
}
