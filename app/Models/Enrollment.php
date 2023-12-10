<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Enrollment extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $perPage = 50;

    protected $fillable = [
        'user_id',
        'course_id',
        'enrolled_at',
        'paid_at',
    ];

    protected $appends = [
//       'is_user_enrolled',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function getIsUserEnrolledAttribute()
    {
        return  Enrollment::where('course_id', $this->id)
            ->where('user_id', auth()->user()->id)
            ->first();
    }
}
