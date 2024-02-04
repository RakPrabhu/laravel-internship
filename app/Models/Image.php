<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['event_id', 'path', 'is_main'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
