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

        return view('post.index', compact('posts'));
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
        'created_at' => now(),
        'updated_at' => now(),

    ]);

    return redirect()->route('posts.index')
                     ->with('success','Thêm bài viết thành công!');
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
        if(!post){
            abort(404);
            return view('post.edit');
        }
    }
   public function update(StorePostRequest $request, $id)
   {
       $post = Post::find($id);
       if(!$post){
           abort(404);
       }
       $post->update([
           'title' => $request->get('title'),
           'content' => $request->get('content'),
           'updated_at' => now(),
       ]);
       return redirect()->route('posts.index')
                        ->with('success','Cập nhật bài viết thành công!');
   }
    public function destroy($id)
    {
        $post = Post::find($id);
        if(!$post){
            abort(404);
        }
        $post->delete();
        return redirect()->route('posts.index')
                         ->with('success','Xóa bài viết thành công!');
    }
}
