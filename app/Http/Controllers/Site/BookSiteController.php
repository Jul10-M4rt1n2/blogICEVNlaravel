<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookSiteController extends Controller
{
    public function index()
    {
        return view('site.books.index');
    }

    public function detalhesLivro()
    {
        return view('site.books.detalhesLivro');
    }
}
