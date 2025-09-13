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
       $posts = Post::all();
        return view('post.index', compact('post'));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(StorePostRequest $request)
    {
        Post::create([
        'title'   => $request->get('title'),
        'content' => $request->get('content'),
    ]);

    return redirect()->route('posts.index')
                     ->with('success','Thêm bài viết thành công!');
}

    }

}
