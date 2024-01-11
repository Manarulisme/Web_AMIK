<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $kategori = Kategori::all();
        $i = 0;

        return view('Admin_pages.Post_page.Kategori.index_kategori', compact('kategori', 'i'));
    }


    /**
     * Show the form for creating a new resource.
     */
    // public function create():View
    // {
    //     return view('Admin_pages.Post_page.Kategori.create_kategori');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        Kategori::create([
            'name'     => $request->name
        ]);

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(string $id): View
    {
        $kategori = Kategori::findOrFail($id);

                 //render view with kategori
        return view('Admin_pages.Post_page.Kategori.edit_kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update([
            'name' => $request->name
        ]);

     //redirect to index
    return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Diubah!']);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
