@extends('layouts.frontend')

@section('content')
    {{-- start berita --}}
    <section class=" border-b py-8 w-full">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                Berita Terbaru
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            @forelse ($berita as $data)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    @forelse ($data->gambar as $gambar)
                        <img class="w-full" src="{{ asset('storage/' . $gambar->link) }}"
                            alt="Sunset in the mountains">
                    @empty
                        <img class="w-full" src="https://picsum.photos/200" alt="Sunset in the mountains">
                    @endforelse
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $data->judul }}</div>
                        <p class="text-gray-700 text-base">
                            {{ Str::limit($data->isi, 100, '...')() }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>
            @empty
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                    <img class="w-full" src="https://picsum.photos/200" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">BERITA KOSONG</div>
                        <p class="text-gray-700 text-base">
                            Tidak ada berita saat ini
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>
            @endforelse
        </div>
    </section>
    {{-- end berita --}}
@endsection
