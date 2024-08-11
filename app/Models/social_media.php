<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social_media extends Model
{
    use HasFactory;



    protected $fillable = [
        'whatsapp',
        'facebook',
        'linkedin',
        'company_id',
    ];
}
