<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable =[
        'selected_theme',
        'commission_type',
        'live_chat',
        'show_provider_contact_info',
        'layout',
        'lg_header',
        'sm_header',
        'currency_name',
        'currency_icon',
        'currency_position',
        'Timezone',

    ];
}

