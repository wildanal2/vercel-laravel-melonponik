<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function charts()
    {
        return view('iot.statistik');
    }

    public function tables()
    {
        return view('iot.histori');
    }

    public function aktivitas()
    {
        return view('iot.aktivitas');
    }

    public function relay()
    {
        return view('iot.relay');
    }
}
