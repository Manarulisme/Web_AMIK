<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\Slideshow;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index(): View
    {
        $count_posts = Post::all();
        $count_kategoris = Kategori::all();
        $count_carousel = Slideshow::all();
        $count_agendas = Agenda::all();

     return view('Admin_pages.dashboard', compact('count_posts','count_kategoris', 'count_carousel', 'count_agendas'));
    }
}
