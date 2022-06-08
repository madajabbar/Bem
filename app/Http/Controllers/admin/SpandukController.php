<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Spanduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Img;

class SpandukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Spanduk';
        if ($request->ajax()) {
            $data = Spanduk::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('gambar',function ($data){
                        foreach($data->gambar as $data){
                            $gambar = asset('storage/'.$data->link);
                            // dd($gambar);
                            return '<img src="'.$gambar.'" alt="Girl in a jacket" width="200" height="200">';
                        }
                    })
                    ->addColumn('action', function ($content) {
                        return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
                    })
                    ->rawColumns(['gambar','action'])
                    ->make(true);
        }
        return view('admin.master_data.spanduk.index',compact(['data']));
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
        // $request->validate(['spanduk'=>'required']);
        $data = Spanduk::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name]
        );
        // $img = $data->gambar()->latest()->value('link');
        $path = null;
        if ($request->spanduk) {
            $name = $request->spanduk;
            $name_picture = Str::slug($name) .'.webp';
            $picture = Img::make($request->spanduk)->resize(null, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('webp', 100);
            $namePath = strtolower('Spanduk');
            $path = $namePath . "/" . $name_picture;
            Storage::put("public/" . $path, $picture);
            if ($path != null) {
                $data->gambar()->updateOrcreate(['name' => $name_picture, 'link' => $path]);
            }
        }
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
        $data = Spanduk::find($id);

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
        $data = Spanduk::find($id);

        foreach($data->gambar as $gambar){
            $path = $gambar->link;
            Storage::delete("public/" . $path);
            // $path->delete();
            $data->delete();
        }
        return response()->json(['success' => 'Berhasil dihapus']);
    }
}
