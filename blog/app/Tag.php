<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Posts::class, 'post_tag', 'tag_id', 'post_id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
