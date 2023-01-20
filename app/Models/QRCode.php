<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'username', 'random_code', 'input_text', 'dynamic_link', 'logo_directory', 'logo_name', 'dot_color', 'eye_color', 'dot_style', 'eye_style',
    ];
}
