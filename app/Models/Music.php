<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = "musics";

    protected $fillable = [
        'name',
        'album',
        'duration_seconds',
        'artist_id'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}