<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Services\v1\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct(private PostService $service)
    {

    }

    public function index()
    {
        return $this->service->getPosts(count: 12, name: 'VLAD');
        // return DB::table('users')->get();
        // return [
        //     'data' => 123
        // ];
    }
}
