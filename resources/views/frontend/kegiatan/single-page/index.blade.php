@extends('layouts.frontend')

@section('content')
    {{-- start kegiatan --}}
    <section class="container border-b p-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12 bg-white rounded">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-left text-gray-800">
                {{$kegiatan->judul}}
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink h-full text-gray-700">
                <div class="flex flex-wrap justify-center">
                    @foreach($kegiatan->gambar as $gambar)
                        <div class="w-6/12 sm:w-4/12 px-4">
                            <img class="shadow rounded max-w-full h-auto align-middle border-none" src="{{asset('storage/'.$gambar->link)}}" alt="test">
                        </div>
                    @endforeach
                </div>
                <p class="text-justify">{!!$kegiatan->deskripsi!!}</p>
                <div class="text-right py-32">
                    <p class="">Dibuat : {{$kegiatan->created_at->format('Y-m-d')}}</p>
                    <p class="">tag : {{$kegiatan->struktur->name}}</p>
                </div>
                <a class="text-left" href="{{route('activity.index')}}"><i class="bi bi-skip-backward"></i> Kembali Ke kegiatan</a>
            </div>
        </div>
    </section>
    {{-- end kegiatan --}}
@endsection
