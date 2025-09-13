<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(StorePostRequest $request)
    {
        DB::table('posts')->insert([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);
    }

}
