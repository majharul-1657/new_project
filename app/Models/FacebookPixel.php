<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookPixel extends Model
{
    use HasFactory;
    protected $fillable=[
        'app_id',
        'allow_facebook_pixel',
    ];
}
