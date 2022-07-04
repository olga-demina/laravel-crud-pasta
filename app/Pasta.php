<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasta extends Model
{
    use SoftDeletes;
    
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
