<?php

namespace market;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = ['name', 'city', 'website'];
}

