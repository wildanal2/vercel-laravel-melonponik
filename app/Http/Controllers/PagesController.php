<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function charts()
    {
        return view('pages.statistik');
    }

    public function tables()
    {
        return view('pages.histori');
    }

    public function aktivitas()
    {
        return view('pages.aktivitas');
    }

    public function relay()
    {
        return view('pages.relay');
    }
}
