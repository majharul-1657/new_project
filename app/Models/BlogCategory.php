<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
protected $fillable =[
'name',
'slag',
'status',
];
    protected $appends = ['totalBlog'];

    public function blogs(){
        return $this->hasMany(Blog::class)->where('status',1);
    }

    public function getTotalBlogAttribute()
    {
        return $this->blogs()->count();
    }
}
