<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Facility;

class Town extends Model
{
    protected $fillable = [
        'name', 'latitude', 'longitude',
    ];

    protected $dates = [
      'created_at',
      'updated_at',
    ];


    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
}
