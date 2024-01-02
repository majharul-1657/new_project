<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoFavicon extends Model
{
    use HasFactory;

    protected $fillable =[
        'logo',
        'footer_logo',
         'favicon',

    ];
}
