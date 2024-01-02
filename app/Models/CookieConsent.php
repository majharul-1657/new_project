<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CookieConsent extends Model
{
    use HasFactory;

protected $fillable = [
    'allow',
    'border',
    'corners',
    'background_color',
    'text_color',
    'border_color',
    'button_color',
    'btn_text_color',
    'link_text',
    'btn_text',
    'message',
];

}
