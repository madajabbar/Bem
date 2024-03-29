<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Img;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'INFORMASI BEM UNTAN';
        if ($request->ajax()) {
            $data = Informasi::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('file',function ($data){
                        foreach ($data->gambar as $data){
                            $link = asset('storage/'.$data->link);
                            return '<a href="'.$link .'" class="edit btn btn-success btn-sm" download><i class="bi bi-card-image"></i></a>';
                        }
                    })
                    ->addColumn('action', function ($content) {
                        return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
                    })
                    ->rawColumns(['file','action'])
                    ->make(true);
        }
        // $data['struktur'] = Struktur::orderBy('id', 'DESC')->get();
        return view('admin.informasi.index',compact(['data']));
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
        $data = Informasi::updateOrCreate(['id' => $request->id],
        [
            'judul' => $request->judul,
            'informasi' => $request->informasi,
            // 'file' => $request->file,
        ]);
        $path = null;
        if ($request->file) {
            $extension = $request->file->getClientOriginalExtension();
            $name_picture = Str::slug($data->judul) .$extension;
            $namePath = strtolower('Informasi');
            $path = public_path().'/storage/informasi/';
            $dir = $namePath .'/' . $name_picture;
            $file = $request->file('file');
            $file->move($path, $name_picture);
            if ($path != null) {
                $data->gambar()->updateOrcreate(['name' => $name_picture, 'link' => $dir]);
            }
        }
        return response()->json(['success'=>'Informasi berhasil ditambahkan']);
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
        $data = Informasi::findOrFail($id);

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
        Informasi::find($id)->delete();

        return response()->json('success');
    }
}
