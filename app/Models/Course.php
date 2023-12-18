<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $perPage = 50;

    protected $fillable = [
        'title',
        'description',
        'register_starts_at',
        'register_ends_at',
        'seats_available',
        'price',
        'hours',
        'from_date',
        'to_date',
    ];

    protected $appends = [
        'is_user_enrolled',
        'days',
    ];

    protected $casts = [
        'from_date' => 'datetime:d-m-Y',
        'to_date' => 'datetime:d-m-Y',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function getIsUserEnrolledAttribute()
    {
        if (!auth()->check()) {
            return false;
        }

        return Enrollment::where('course_id', $this->id)
            ->where('user_id', auth()->user()->id)
            ->first();
    }

    public function getDaysAttribute()
    {
        if ($this->from_date && $this->to_date) {
            return $this->from_date->diffInDays($this->to_date);
        }
    }
}
