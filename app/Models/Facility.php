<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Town;

class Facility extends Model
{
    protected $fillable = [
        'name', 'qty', 'latitude', 'longitude', 'type', 'town_id'
    ];

    protected $dates = [
      'created_at',
      'updated_at',
    ];

    public function town()
    {
        return $this->belongsTo(Town::class);
    }
}
