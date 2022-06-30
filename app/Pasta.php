<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    protected $table = 'pasta';

    protected $fillable = [
        'title',
        'type',
        'image_src',
        'cook_time',
        'weight',
        'description'
    ];
}
