<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRHit extends Model
{
    use HasFactory;
    protected $fillable = [
        'qr_id',
        'user_ip',
        'qr_hit_on'
    ];
}
