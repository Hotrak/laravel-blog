<?php

namespace App\Http\Services\v1;

class PostService
{
    public function getPosts()
    {
        return [
            0 => [
                'name' => $name,
                'count' => $count,
            ]
        ];
    }
}
