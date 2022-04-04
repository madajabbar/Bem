<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    public function kegiatan()
    {
        return view('kegiatan');
    }
    public function berita()
    {
        return view('berita');
    }
    public function galeri()
    {
        return view('galeri');
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function struktur()
    {
        return view('struktur');
    }
}
