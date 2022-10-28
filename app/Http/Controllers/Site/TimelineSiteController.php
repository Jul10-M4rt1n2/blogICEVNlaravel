<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimelineSiteController extends Controller
{
    public function index()
    {
        return view('site.timeline.index');
    }
}