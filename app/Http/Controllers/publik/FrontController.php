<?php

namespace App\Http\Controllers\publik;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Post;
use App\Models\Slideshow;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function Index(): View
    {
        $slidefirsts = Slideshow::where('top_slideshow','Ya')->first();
        $slideshows = Slideshow::where('top_slideshow','Tidak')->orderBy('id')->get();
        $headline = Post::where('headline','Ya')->first();
        $informs = Post::where('headline','Tidak')->orderBy('id', 'desc')->take(4)->get();
        $agendas = Agenda::orderBy('id', 'desc')->take(4)->get();
        return view('pages.beranda', compact('slideshows','slidefirsts','headline','informs', 'agendas'));
    }

    public function show(Post $post): View
    {
        return view('pages.showpost', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function ShowAgenda(Agenda $agenda): View
    {
        return view('pages.showagenda', [
            "title" => "Single Post",
            "agenda" => $agenda
        ]);
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

    public function fasilitas(): View{

        return view('pages.tentang.fasilitas');
    }

    public function jurusan(): View{

        return view('pages.akademik.jurusan');
    }

    public function kurikulum(): View{

        return view('pages.akademik.kurikulum');
    }

    public function matakuliah(): View{

        return view('pages.akademik.mata_kuliah');
    }

    public function biayakuliah(): View{

        return view('pages.akademik.biaya');
    }

    public function staffpengajar(): View{

        return view('pages.akademik.staffpengajar');
    }


    public function allposts(): View{

        $allposts = Post::where('headline','Tidak')->orderBy('id', 'desc')->paginate(12);
        return view('pages.allpostspage', compact('allposts'));
    }

    public function allagendas(): View{

        $allagendas = Agenda::orderBy('id', 'desc')->paginate(12);
        return view('pages.allagendaspage', compact('allagendas'));
    }

    public function staffposts(): View{

        $staffposts = Post::where('headline','Tidak')->where('objek_id','4')->orderBy('id', 'desc')->paginate(12);
        return view('pages.objeks.staff', compact('staffposts'));
    }

    public function mhsposts(): View{

        $mhsposts = Post::where('headline','Tidak')->where('objek_id','1')->orderBy('id', 'desc')->paginate(12);
        return view('pages.objeks.mahasiswa', compact('mhsposts'));
    }

    public function alumniposts(): View{

        $alumniposts = Post::where('headline','Tidak')->where('objek_id','2')->orderBy('id', 'desc')->paginate(12);
        return view('pages.objeks.alumni', compact('alumniposts'));
    }


    public function mitraposts(): View{

        $mitraposts = Post::where('headline','Tidak')->where('objek_id','5')->orderBy('id', 'desc')->paginate(12);
        return view('pages.objeks.mitra', compact('mitraposts'));
    }


    public function pengunjungposts(): View{

        $pengunjungposts = Post::where('headline','Tidak')->where('objek_id','3')->orderBy('id', 'desc')->paginate(12);
        return view('pages.objeks.pengunjung', compact('pengunjungposts'));
    }


    public function kontak(): View{

        return view('pages.kontak');
    }


}
