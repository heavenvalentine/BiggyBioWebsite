<?php

namespace App\Http\Controllers;

use DB;
use App;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(50);

        return view('posts.index', compact('posts'));
    }

    public function article()
    {
            $posts = Post::latest()->paginate(50);

            return view('posts.programs', compact('posts'));
    }

    public function post_preview()
    {
            $posts = Post::latest()->paginate(50);

            return view('posts.preview', compact('posts'));
    }

    public function detail($id)
    {
        $post=Post::find($id);

        return view('posts.detail', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'title'     => 'required|min:24',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        Post::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Add success.']);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'title'     => 'required|min:24',
            'content'   => 'required|min:10'
        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            Storage::delete('public/posts/'.$post->image);

            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            $post->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Edit suceess.']);
    }


    public function destroy(Post $post)
    {
        Storage::delete('public/posts/'. $post->image);

        $post->delete();

        return redirect()->route('posts.index')->with(['success' => 'Delete success.']);
    }
}

