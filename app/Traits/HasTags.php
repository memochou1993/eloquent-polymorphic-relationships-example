<?php

namespace App\Traits;

use App\Tag;

trait HasTags {
    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'model', 'model_has_tags');
    }
}
