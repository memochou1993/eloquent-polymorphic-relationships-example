<?php

namespace App\Traits;

use App\Comment;

trait HasComments {
    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'model');
    }
}
