<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    use HasFactory;
    protected $table = 'qr';
    protected $primaryKey = 'id';
    protected $fillable = ['user_input', 'logo_name', 'dot_color', 'eye_color', 'dot_style', 'eye_style'];
}
