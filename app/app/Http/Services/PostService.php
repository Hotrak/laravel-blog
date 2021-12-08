<?php

namespace App\Services;

class PostService
{
    public function getPosts(int $count, string $name)
    {
        return [
            0 => [
                'name' => $name,
                'count' => $count,
            ]
        ];
    }
}
