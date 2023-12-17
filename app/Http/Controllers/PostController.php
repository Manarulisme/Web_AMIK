<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
//return type View
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('Admin_pages.Post_page.Post1.read_post', compact('posts'));
    }

    public function create(): View
    {
        return view('Admin_pages.Post_page.Post1.create_post');
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

    public function show(string $id) : View
    {
        $post = Post::findOrFail($id);

        return view('Admin_pages.Post_page.Post1.detail_post', compact('post'));
    }

    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);

        return view('Admin_pages.Post_page.Post1.update_post', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            Storage::delete('public/posts'.$post->image);

            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content
            ]);
        }
        else{
            $post->update([
                'title' =>$request->title,
                'content'=>$request->content
            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        Storage::delete('public/posts/'.$post->image);

        $post->delete();

      //redirect to index
      return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

