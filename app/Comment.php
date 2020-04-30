<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the owning model.
     */
    public function model()
    {
        return $this->morphTo();
    }
}
