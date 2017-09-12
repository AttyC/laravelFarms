<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = ['name', 'city', 'website'];

    public function markets()
     {
         return $this->belongsToMany('\market\Market')->withTimestamps();
     }
}
