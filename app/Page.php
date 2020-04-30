<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * Get the page's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'model');
    }

    /**
     * Get all of the page's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'model');
    }
}
