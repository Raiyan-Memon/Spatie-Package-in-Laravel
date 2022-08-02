<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use \App\Traits\TraitUuid;
    protected $fillable = [
        'title',
        'desc'
    ];
}
