<?php

namespace App;

use App\Traits\HasComments;
use App\Traits\HasImage;
use App\Traits\HasTags;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasImage;
    use HasComments;
    use HasTags;
}
