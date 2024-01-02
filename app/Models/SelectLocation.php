<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectLocation extends Model
{
    use HasFactory;


    protected $fillable =[
        'id',
        'name',
        'status',
        ];
            protected $appends = ['totalBlog'];

            public function Property(){
                return $this->hasMany(Property::class)->where('status',1);
            }
}
