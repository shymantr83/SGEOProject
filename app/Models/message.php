<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\company;

class message extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'message',
    'sender',
        'receiver',
        'is_company',
        'company_id',
        'user_id'] ;
    public function users()
        {return $this->belongsTo(User::class);
        }
    public function companies()
        {return $this->belongsTo(company::class);
        }
}
