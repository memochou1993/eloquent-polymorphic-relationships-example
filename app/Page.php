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
}
