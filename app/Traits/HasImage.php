<?php

namespace App\Traits;

use App\Image;

trait HasImage {
    /**
     * Get the page's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'model');
    }
}
