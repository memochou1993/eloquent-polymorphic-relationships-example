<?php

namespace App\Traits;

use App\Image;

trait HasImage {
    /**
     * Get the model's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'model');
    }
}
