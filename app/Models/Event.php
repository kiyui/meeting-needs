<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'data', 'time', 'photo_id', 'location_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }

    public function photos()
    {
        return $this->belongsToMany('App\Models\Photo', 'photo_events');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_events');
    }
}
