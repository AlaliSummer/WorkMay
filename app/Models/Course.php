<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
