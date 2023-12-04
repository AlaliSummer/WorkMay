<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Invoice extends Model
{
//    use Auditable;
    use HasFactory;
//    use SoftDeletes;

    const STATUS_UNPAID = 0;
    const STATUS_PAID = 1;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $perPage = 50;

    protected $fillable = [
        'user_id',
        'course_id',
        'number',
        'company_name',
        'reference_id',
        'sub_total',
        'tax',
        'grand_total',
        'user_id',
        'issued_at',
        'paid_at',
        'status',
        'payment_method',
        'sent_at',
        'created_by_id',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
            $model->number = MaxNumber::generateForPrefix('INV');
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

}
