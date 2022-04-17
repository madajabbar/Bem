<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Tag;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'BERITA';
        $data['tag'] = Tag::all();
        if ($request->ajax()) {
            $data = Berita::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('tag', function($row){
                        return $row->tag->name;
                    })
                    ->editColumn('isi', function($row){
                        return substr($row->isi, 0, 200).'. . . . . . . . . . . . . . . .';
                    })
                    ->editColumn('picture',function ($data){
                        return '<img src="asset(storage/'.$data->picture .')" alt="Girl in a jacket" width="500" height="600">';
                    })
                    ->addColumn('gambar',function ($data){
                        return 'gambar';
                    })
                    ->addColumn('action', function ($content) {
                        return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
                    })
                    ->make(true);
        }
        return view('admin.berita.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $data = new Berita;
        // $data->judul = $request->judul;
        // $data->isi = $request->isi;
        // $data->tag_id = $request->tag_id;
        // $data->save();
        // return redirect()->route('berita.index')->with('success','Berita berhasil ditambahkan');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->get('isi'));
        Berita::updateOrCreate(['id' => $request->id]
        ,['judul' => $request->judul, 'isi' => $request->isi, 'tag_id' => $request->tag_id]);
        return response()->json(['success' => 'Berhasil disimpan']);
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
        $data = Berita::find($id);
        return response()->json($data);
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
        Berita::find($id)->delete();
        return response()->json(['success' => 'Berhasil dihapus']);
    }
}
