<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use Illuminate\Http\Request;

class ArticleNewsController extends Controller
{
    public function index()
    {
        $articles = ArticleNews::with('category')
            ->latest()->take(1)->get();

            $artikellanjutan = ArticleNews::with('category')
            ->latest()
            ->skip(1)   // lewati berita pertama
            ->take(10)  // ambil 10 berikutnya (2–11)
            ->get();

        return view('home', compact('articles', 'artikellanjutan'));
    }

    // menampilkan detail artikel
    public function show($slug)
    {
        $article = ArticleNews::with('category')
        ->where('slug', $slug)
        ->firstOrFail();
        
        return view('detail', compact('article'));
    }
}
