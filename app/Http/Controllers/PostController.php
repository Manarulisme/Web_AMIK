<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kategori;
use App\Models\Objek;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
         //get posts
        // $posts = DB::table('posts')->orderBy('id','desc')->get();
        $posts = Post::all();
        $i=0;
         //render view with posts
         return view('Admin_pages.Post_page.Post.index_post', compact('posts', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $kategori = Kategori::all();
        $select_objek = Objek::all();
        return view('Admin_pages.Post_page.Post.create_post', compact('kategori', 'select_objek'));
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
            'detail'   => 'required|min:10',
            'headline' => 'required',
            'kategori_id' => 'required',
            'objek_id' => 'required'
        ]);
        // dd($request);
        //upload image
        $img_sampul = $request->file('img_sampul');
        $img_sampul->storeAs('public/images', $img_sampul->hashName());

        //create post
        Post::create([
            'img_sampul'     => $img_sampul->hashName(),
            'judul'     => $request->judul,
            'slug'     => $request->slug,
            'detail'   => $request->detail,
            'headline'   => $request->headline,
            'kategori_id'   => $request->kategori_id,
            'objek_id'   => $request->objek_id
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
         //get post by ID
         $post = Post::findOrFail($slug);

         //render view with post
         return view('Admin_pages.Post_page.Post.show_post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
         //get post by ID
         $post = Post::findOrFail($id);

         //render view with post
         return view('Admin_pages.Post_page.Post.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
         //validate form
         $this->validate($request, [
            'img_sampul'   => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'        => 'required|min:5',
            'detail'       => 'required|min:10'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('img_sampul')) {

            //upload new image
            $img_sampul = $request->file('img_sampul');
            $img_sampul->storeAs('public/images', $img_sampul->hashName());

            //delete old image
            Storage::delete('public/images/'.$post->img_sampul);

            //update post with new image
            $post->update([
                'img_sampul'     => $img_sampul->hashName(),
                'judul'     => $request->judul,
                'detail'   => $request->detail
            ]);

        } else {

            //update post without image
            $post->update([
                'judul'     => $request->judul,
                'detail'   => $request->detail
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
         //get post by ID
         $post = Post::findOrFail($id);

         //delete image
         Storage::delete('public/images/'. $post->img_sampul);

         //delete post
         $post->delete();

         //redirect to index
         return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug'=> $slug]);
    }
}
