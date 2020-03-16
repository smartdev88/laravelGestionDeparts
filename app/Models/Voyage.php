<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voyage extends Model
{
    

    use SoftDeletes;
    
    protected $fillable = ['startDate', 'endDate', 'price'];

    protected $dates = ['startDate', 'endDate'];

    public function destinations()
    {
        return $this->belongsToMany('App\Models\Destination', 'voyage_has_destination');
    }
}
