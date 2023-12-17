<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {

        return view('Admin_pages.Post_page.Post.index_post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('Admin_pages.Post_page.Post.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destinationPath = 'gambar/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Post::create($input);

        return redirect()->route('posts.index')->with('success', 'Post Berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post) : View
    {

        return view('Admin_pages.Post_page.Post.show_post', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post) : View
    {
        //
        return view('Admin_pages.Post_page.Post.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        $request->validate([

            'judul' => 'required',

            'isi' => 'required'

        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'gambar/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }



        $post->update($input);



        return redirect()->route('posts.index')

                        ->with('success','Post Berhasil diperbahaui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post) : RedirectResponse
    {
        $post->delete();



        return redirect()->route('posts.index')

                        ->with('success','Product deleted successfully');
    }
}
