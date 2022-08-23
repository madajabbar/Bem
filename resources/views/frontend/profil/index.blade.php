@extends('layouts.frontend')

@section('content')
    {{-- start berita --}}
    <section class="container border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                STRUKTUR
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            @forelse($struktur as $data)
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto h-64 flex items-center justify-center">
                    <center>
                        <a href="{{ url('structure/' . $data->id) }}">
                            <i class="bi bi-people-fill" style="font-size: 64px"></i>
                            <div class="px-6 py-4 ">
                                <div class="font-bold text-xl mb-2 ">{{ $data->nama }}</div>
                                <p class="text-gray-700 text-base ">
                                    Periode {{ $data->periode->periode }}
                                </p>
                                <p class="text-gray-700 text-base ">
                                    Jumlah Anggota {{ $data->anggota->count() }}
                                </p>
                            </div>
                        </a>
                    </center>
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
    </section>
    {{-- end berita --}}
@endsection
