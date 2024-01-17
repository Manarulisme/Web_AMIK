<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $slideshows = Slideshow::all();
        $i = 0;

        return view('Admin_pages.Post_page.Slideshow.index_slideshow', compact('slideshows', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
 // return $request;
        //validate form
        $this->validate($request, [
            'img_slideshow'     => 'required|image|mimes:jpeg,jpg,png|min:100',
            'judul'     => 'required|min:5',
            'top_slideshow'     => 'required',
            'deskripsi'   => 'required|min:10'
        ]);
        // dd($request);
        //upload image
        $img_slideshow = $request->file('img_slideshow');
        $img_slideshow->storeAs('public/slideshow', $img_slideshow->hashName());

        //create post
        Slideshow::create([
            'img_slideshow'     => $img_slideshow->hashName(),
            'judul'     => $request->judul,
            'top_slideshow'     => $request->top_slideshow,
            'deskripsi'   => $request->deskripsi,
        ]);

        //redirect to index
        return redirect()->route('slideshow.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slideshow $slideshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slideshow $slideshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slideshow $slideshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $slideshow = Slideshow::findOrFail($id);
        $slideshow->delete();

        return redirect()->route('slideshow.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
