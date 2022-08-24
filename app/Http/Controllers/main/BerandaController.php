<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\background;
use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Kegiatan;
use App\Models\Spanduk;
use App\Models\Video;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Shetabit\Visitor\Traits\Visitable;
class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['berita'] = Berita::latest()->take(3)->get();
        $data['kegiatan'] = Kegiatan::latest()->take(3)->get();
        $data['informasi'] = Informasi::latest()->take(3)->get();
        $data['spanduk'] = Spanduk::latest()->take(5)->get();
        $data['background'] = background::latest()->take(1)->get();
        $data['visimisi'] = VisiMisi::latest()->first();
        $data['video'] = Video::latest()->take(1)->get();
        visitor()->visit();
        return view('frontend.beranda.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function background(){
        $data = background::latest()->take(1)->get();
        foreach($data as $data) {
            foreach($data->gambar as $gambar){
                $path = $gambar->link;
            }
        }
        return $path;
    }
}
