<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Get the owning model.
     */
    public function model()
    {
        return $this->morphTo();
    }
}
