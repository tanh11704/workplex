<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'icon',
        'image',
        'description',
        'salary',
        'category_id',
        'type',
        'career_level',
        'specialisms',
        'experience',
        'qualification',
        'deadline',
        'country',
        'city',
        'full_address',
        'user_id',
    ];

    public $timestamps = true;

    /**
     * Phương thức này tạo một mối quan hệ "belongsTo" giữa một sản phẩm và danh mục tương ứng.
     *
     * Hàm này được sử dụng để thiết lập một quan hệ "belongsTo" trong mô hình Eloquent
     * giữa một sản phẩm và danh mục của nó dựa trên khóa ngoại "category_id".
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function appliedJobs()
    {
        return $this->hasMany(AppliedJob::class, 'job_id');
    }

    public function hasApplied($userId)
    {
        return $this->appliedJobs()->where('user_id', $userId)->exists();
    }
}
