<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeColor extends Model
{
    use HasFactory;

    protected $fillable=[
        'theme_one_color',
        'theme_two_color',
        'theme_three_color',
    ];
}


