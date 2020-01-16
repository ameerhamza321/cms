<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $dates = ['created_at'];
    protected  $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //this is for frontend image.
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        if(! is_null($this->image))
        {
            $imagePath = public_path() . "/images/" . $this->image;
            if(file_exists($imagePath)) $imageUrl = asset("images/" . $this->image);
        }
        return $imageUrl;
    }

    //this is for date formate in article
    public function getDateAttribute($value)
    {
        return $this->created_at ? $this->created_at->diffForHumans(): null;
    }

    //this is for latest article post
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
