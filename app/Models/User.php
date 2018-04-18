<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Place;
use App\Models\Recommandation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guard = [
        ''
    ];

    public function places()
    {
        return $this->belongsToMany(Place::class)->withPivot('rating', 'message')->withTimestamps();
    }

    public function recommandations()
    {
        return $this->hasMany(Recommandation::class);
    }
}
