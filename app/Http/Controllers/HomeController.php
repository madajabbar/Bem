<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Kegiatan;
use App\Models\Struktur;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['berita'] = Berita::all();
        $data['kegiatan'] = Kegiatan::all();
        $data['informasi'] = Informasi::all();
        $struktur = Struktur::latest()->value('id');
        $data['anggota'] = Anggota::where('struktur_id',$struktur)->get();

        $items = Visitor::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(created_at) as month_name")
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->get();
        return view('admin.dashboard.index',$data);
    }
}
