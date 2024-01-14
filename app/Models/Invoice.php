<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Salla\ZATCA\GenerateQrCode;
use Salla\ZATCA\Tags\InvoiceDate;
use Salla\ZATCA\Tags\InvoiceTaxAmount;
use Salla\ZATCA\Tags\InvoiceTotalAmount;
use Salla\ZATCA\Tags\Seller;
use Salla\ZATCA\Tags\TaxNumber;

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
        'sent_at',
        'created_by_id',
    ];

    protected $casts = [
        'issued_at' => 'datetime',
        'paid_at' => 'datetime',
        'sent_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    protected $appends = [
        'invoice_qr_image',
        'number_formatted',
        'created_at_date',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
            $model->number = MaxNumber::generateForPrefix('INV', 10000);
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

    public function scopeNotPaid($q)
    {
        $q->where('status', self::STATUS_UNPAID);
    }

    /**
     * @return string
     */
    public function getInvoiceQrImageAttribute()
    {
        return GenerateQrCode::fromArray([
            new Seller('شركة مركز احترافية المدرب للتدريب'),
            new TaxNumber('311555192400003'), // tax number
            new InvoiceDate($this->created_at->toIso8601ZuluString()), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
            new InvoiceTotalAmount($this->grand_total),
            new InvoiceTaxAmount($this->tax)
        ])->render();
    }

    public function getNumberFormattedAttribute(): string
    {
        return $this->created_at->year
            . str_pad($this->created_at->month, 2, "0", STR_PAD_LEFT)
            . "-"
            . $this->number;
    }

    public function getCreatedAtDateAttribute(): string
    {
        return $this->created_at->toDateString();
    }
}
