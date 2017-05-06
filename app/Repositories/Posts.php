<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/6/2017
 * Time: 2:52 PM
 */

namespace App\Repositories;


use App\Post;
use App\Redis;

class Posts
{
    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function all()
    {
        // return all posts
        return Post::all();
    }
}