@extends('layouts.frontend')

@section('content')
    {{-- start berita --}}
    <section class="container border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                Video
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            @forelse($video as $data)
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                    <iframe class="mx-auto" width="400" height="250" src="{{ $data->link }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <h4 class="mx-auto animate-bounce text-xl font-bold">{{ $data->judul }}</h4>
                </div>
            @empty
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                    <i class="bi bi-people-fill" style="font-size: 64px"></i>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">DATA KOSONG</div>
                        <p class="text-gray-700 text-base ">
                            TIDAK ADA DATA YANG DITEMUKAN
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
        {{ $video->links() }}
    </section>
    {{-- end berita --}}
@endsection
