<?php

namespace App\Http\Controllers\publik;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Post;
use App\Models\Slideshow;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function Index(): View
    {
        $slidefirsts = Slideshow::where('top_slideshow','Ya')->first();
        $slideshows = Slideshow::where('top_slideshow','Tidak')->orderBy('id')->get();
        $headline = Post::where('headline','Ya')->first();
        $informs = Post::where('headline','Tidak')->orderBy('id', 'desc')->get();
        $agendas = Agenda::all();
        return view('pages.beranda', compact('slideshows','slidefirsts','headline','informs', 'agendas'));
    }

    public function show(string $id): View
    {
         //get post by ID
         $post = Post::findOrFail($id);

         //render view with post
         return view('pages.showpost', compact('post'));
    }

    public function sambutan(): View{

        $sambutans = Post::where('headline','Ya')->first();
        return view('pages.tentang.sambutan', compact('sambutans'));
    }

    public function visimisi(): View{

        return view('pages.tentang.visi_misi');
    }

    public function struktur(): View{

        return view('pages.tentang.struktur');
    }
}
