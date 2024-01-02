<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLogin extends Model
{
    use HasFactory;


    protected $fillable=[
        'allow_facebook_login',
        'facebook_app_id',
        'facebook_app_secret',
        'facebook_redirect_url',
        'allow_gmail_login',
        'gmail_client_id',
        'gmail_secret_id',
        'gmail_redirect_url',
    ];
}
