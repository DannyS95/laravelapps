<?php

namespace App\Repositories;

use App\Posts;
use App\Redis;

class Post
{
    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function all()
    {
        return Posts::latest()
           ->filter(request(['month', 'year']))
           ->get();
    }

    public function find()
    {

    }
}