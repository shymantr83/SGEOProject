<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
//mplements JWTSubject
class company  extends  Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
//    use HasTranslations;

//    public $translatable = ['name', 'overview',];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'overview',
        'logo',
        'specialization_id',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'email'=>$this->email,
            'name'=>$this->name
        ];
    }
    public function specialization()
    {return $this->belongsTo(specialization::class);
    }
    public function projects()
    {return $this->hasMany(project::class);
    }
    public function social()
    {return $this->hasMany(social_media::class);
    }
}
