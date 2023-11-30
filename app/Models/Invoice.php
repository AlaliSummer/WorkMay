<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
