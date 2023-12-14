<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//return type View
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('Admin_pages.Post_page.Post.read_post', compact('posts'));
    }

    public function create(): View
    {
        return view('Admin_pages.Post_page.Post.create_post');
    }

    public function store(Request $request): RedirectResponse
    {

        //validate form
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
