<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categore extends Model
{
    use HasFactory;
    protected $fillable =[
        'icon',
        'image',
        'name',
        'slage',
        'status',
    ];
}
