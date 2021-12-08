<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public $service;

    public function __construct(PostService $postService)
    {
        # code...
    }

    public function index()
    {
        return DB::table('users')->get();
        return [
            'data' => 123
        ];
    }
}
