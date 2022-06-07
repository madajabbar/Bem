<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Img;
class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Visi Misi';
        if ($request->ajax()) {
            $data = VisiMisi::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('picture_visi',function ($data){
                        $gambar = asset('storage/'.$data->picture_visi);
                        return '<img src="'.$gambar.'" alt="visi" width="200" height="200">';
                    })
                    ->editColumn('picture_misi',function ($data){
                        $gambar = asset('storage/'.$data->picture_misi);
                        return '<img src="'.$gambar.'" alt="misi" width="200" height="200">';
                    })
                    ->addColumn('action', function ($content) {
                        return '
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                        ';
                    })
                    ->rawColumns(['picture_visi','picture_misi','action'])
                    ->make(true);
        }
        return view('admin.master_data.visimisi.index',compact(['data']));
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
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);
        if($request->picture_visi && $request->picture_misi){
            $name = $request->picture_visi->getClientOriginalName();
            $name_picture = Str::slug($name) .'.webp';
            $picture = Img::make($request->picture_visi)->resize(null, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('webp', 100);
            $namePath = strtolower('visi');
            $path_visi = $namePath . "/" . $name_picture;
            Storage::put("public/" . $path_visi, $picture);

            $name = $request->picture_misi->getClientOriginalName();
            $name_picture = Str::slug($name) .'.webp';
            $picture = Img::make($request->picture_misi)->resize(null, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('webp', 100);
            $namePath = strtolower('misi');
            $path_misi = $namePath . "/" . $name_picture;
            Storage::put("public/" . $path_misi, $picture);
            VisiMisi::updateOrcreate(
                ['id'=>$request->id],
                [
                    'visi' => $request->visi,
                    'misi' => $request->misi,
                    'picture_visi' => $path_visi,
                    'picture_misi' => $path_misi,]
            );
        }
        else{
            VisiMisi::updateOrcreate(
                ['id'=>$request->id],
                [
                    'visi' => $request->visi,
                    'misi' => $request->misi,]
            );
        }
        return response()->json(['success' => 'Data Added successfully.']);
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
        $data = VisiMisi::find($id);
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
        $data = VisiMisi::find($id);

        Storage::delete("public/" . $data->picture_visi);
        Storage::delete("public/" . $data->picture_misi);
        $data->delete();
        return response()->json(['success' => 'Berhasil dihapus']);
    }
}
