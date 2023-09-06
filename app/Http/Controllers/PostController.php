<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return DB::table('posts')->select('*')->get();
    }

    public function create(Request $request)
    {
        return view('post.create', [
            'user' => $request->user,
        ]);
    }

    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();

        DB::table('posts')->insert([
            'content' => $validatedData['content'],
            'user_id' => $validatedData['user'],
        ]);

        return redirect()->route('users.show', ['user' => $validatedData['user']]);
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }

    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post,
        ]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $validatedData = $request->validated();

        DB::table('posts')
            ->where('id', $post->id)
            ->update([
                'content' => $validatedData['content'],
            ]);

        return redirect()->route('users.show', ['user' => $post->user_id]);
    }

    public function destroy(Post $post)
    {
        DB::table('posts')->delete($post->id);

        return redirect()->route('users.show', ['user' => $post->user_id]);
    }
}
