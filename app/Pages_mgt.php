<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages_mgt extends Model
{
    protected $fillable = [
        'title', 'slug', 'heading',
        'meta_title', 'meta_keywords',
        'meta_description', 'description',
    ];
}
