<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['ville'];

    public function voyages()
    {
        return $this->belongsToMany('App\Models\Voyage', 'voyage_has_destination');
    }
}
