<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'ANGGOTA BEM UNTAN';
        if ($request->ajax()) {
            $data = Anggota::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('picture',function ($data){
                        return '<img src="asset(storage/'.$data->picture .')" alt="Girl in a jacket" width="500" height="600">';
                    })
                    ->editColumn('struktur',function ($data){
                        return $data->struktur->nama;
                    })
                    ->addColumn('foto',function ($data){
                        foreach ($data->gambar as $data){
                            $gambar = asset('storage/'.$data->link);
                            return '<img src="'.$gambar.'" alt="'.$gambar.'" width="200" height="300">';
                        }
                    })
                    ->addColumn('action', function ($content) {
                        return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
                    })
                    ->rawColumns(['foto','action'])
                    ->make(true);
        }
        $data['struktur'] = Struktur::orderBy('id', 'DESC')->get();
        return view('admin.anggota.index',compact(['data']));
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
        if($request->gambar){
        $data= Anggota::updateOrCreate(['id' => $request->id],
        [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jabatan' => $request->jabatan,
            'struktur_id' => $request->struktur_id,
        ]);
            $extension = $request->gambar->getClientOriginalExtension();
            $name_picture = Str::slug($data->nama).'.' .$extension;
            $namePath = strtolower('Anggota');
            $path = public_path().'/storage/anggota/';
            $dir = $namePath .'/' . $name_picture;
            $file = $request->file('gambar');
            $file->move($path, $name_picture);
            if ($path != null) {
                $data->gambar()->updateOrcreate(['name' => $name_picture, 'link' => $dir]);
            }

        return response()->json(['success'=>'Anggota berhasil ditambahkan']);
    }else{
        return response()->json(['error'=>'Gambar harus diisi']);
    }
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
        $data = Anggota::find($id);
        return $data;
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
        $data= Anggota::find($id);
        foreach ($data->gambar as $gambar) {
            $path = $gambar->link;
            Storage::delete("public/".$path);
            // $path->delete();
            $data->delete();
        }
        return response()->json(['success'=>'Anggota berhasil dihapus']);
    }
}
