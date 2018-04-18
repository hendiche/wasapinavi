<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Recommandation;

class Place extends Model
{
    protected $fillable = [
        'name', 'description', 'address',
    ];

    protected $dates = [
      'created_at',
      'updated_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function recommandations()
    {
        return $this->belongsToMany(Recommandation::class)->withTimestamps();
    }
}
