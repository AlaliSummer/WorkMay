<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

use function auth;

class MaxNumber extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'value',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($maxNumber) {
            $maxNumber->{$maxNumber->getKeyName()} = (string)Str::uuid();
        });
    }

    /**
     * Create a new number for a prefix.
     *
     * @param     $string
     * @param int $startFrom
     * @param int $digits
     *
     * @return \App\Models\MaxNumber
     */
    public static function generateForPrefix($string, int $startFrom = 0, int $digits = 4): string
    {
        $maxNumber = MaxNumber::lockForUpdate()->firstOrCreate([
            'name' => $string,
        ], [
            'value' => $startFrom,
        ]);

        $number = ++$maxNumber->value;
        $maxNumber->value = $number;
        $maxNumber->save();

        $prependDigits = sprintf('%0' . $digits . 'd', $number);

        return $prependDigits;
        //return $maxNumber->name.$prependDigits;
    }

}
