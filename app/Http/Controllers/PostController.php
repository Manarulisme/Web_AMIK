<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
         //get posts
        $posts = DB::table('posts')->orderBy('id','desc')->get();
        $i=0;

         //render view with posts
         return view('Admin_pages.Post_page.Post.index_post', compact('posts', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('Admin_pages.Post_page.Post.create_post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        // return $request;
        //validate form
        $this->validate($request, [
            'img_sampul'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'     => 'required|min:5',
            'slug'     => 'required|max:255',
            'detail'   => 'required|min:10',
            'category_id' => 'required'
        ]);

        //upload image
        $img_sampul = $request->file('img_sampul');
        $img_sampul->storeAs('public/images', $img_sampul->hashName());

        //create post
        Post::create([
            'img_sampul'     => $img_sampul->hashName(),
            'judul'     => $request->judul,
            'slug'     => $request->slug,
            'detail'   => $request->detail,
            'category_id'   => $request->category_id
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug'=> $slug]);
    }
}
