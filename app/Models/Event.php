<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='events';
    protected $fillable=['title','description','organiser','venue','date'];
    // use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function mainPicture()
    {
        return $this->hasOne(Image::class)->where('is_main', true);
    }

    public function additionalPictures()
    {
        return $this->images->where('is_main', false);
    }
}
