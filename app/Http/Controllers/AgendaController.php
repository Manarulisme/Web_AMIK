<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $i = 0;
        $agendas = Agenda::all();
        return view('Admin_pages.Post_page.Agenda.index_agenda', compact('agendas','i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Admin_pages.Post_page.Agenda.create_agenda');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'img_agenda'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'     => 'required|min:5',
            'date_start'     => 'required',
            'date_finish'     => 'required',
            'time_start'     => 'required',
            'time_finish'     => 'required',
            'lokasi'     => 'required',
            'maps'     => 'required',
            'detail'   => 'required|min:10',
        ]);
        // dd($request);

                //upload image
                $img_agenda = $request->file('img_agenda');
                $img_agenda->storeAs('public/agenda', $img_agenda->hashName());

                $slug = Str::slug($request->judul, '-');
                //create post
                Agenda::create([
                    'img_agenda'     => $img_agenda->hashName(),
                    'judul'     => $request->judul,
                    'slug'     => $slug,
                    'date_start'     => $request->date_start,
                    'date_finish'     => $request->date_finish,
                    'time_start'     => $request->time_start,
                    'time_finish'     => $request->time_finish,
                    'lokasi'     => $request->lokasi,
                    'detail'     => $request->detail,
                    'maps'     => $request->maps,
                ]);

                //redirect to index
                return redirect()->route('agendaterdekat.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
                 //get post by ID
                 $agenda = Agenda::findOrFail($id);

                 //delete image
                 Storage::delete('public/agenda/'. $agenda->img_agenda);

                 //delete agenda
                 $agenda->delete();

                 //redirect to index
                 return redirect()->route('agendaterdekat.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
