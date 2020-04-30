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

    /**
     * Get all of the tags for the page.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'model', 'model_has_tags');
    }
}
