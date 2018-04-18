<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Place;

class Recommandation extends Model
{
    protected $fillable = [
        'user_id', 'min_cost', 'max_cost', 'duration', 'note'
    ];

    protected $dates = [
      'created_at',
      'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function places()
    {
        return $this->belongsToMany(Place::class)->withTimestamps();
    }
}
