@extends('layouts.frontend')

@section('content')
    {{-- start berita --}}
    <section class="container border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                Kabinet Milik Bersama
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            @forelse ($menteri->sortBy('jabatan') as $data)

                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                    @forelse ($data->gambar as $gambar)
                    @if ($loop->last)
                    <img class="w-full" src="{{ asset('storage/' . $gambar->link) }}"
                        alt="Sunset in the mountains">
                    @endif
                    @empty
                        <img class="w-full" src="https://picsum.photos/200" alt="Sunset in the mountains">
                    @endforelse
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $data->nama }}</div>
                        <p class="text-gray-700 text-base">
                            {{$data->jabatan}} di {{$data->struktur->nama}}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$data->nim}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$data->jabatan}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$data->struktur->nama}}</span>
                    </div>
                </div>
                @empty
            @endforelse
            @forelse ($anggota->sortBy('jabatan') as $data)

                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                    @forelse ($data->gambar as $gambar)
                    @if ($loop->last)
                    <img class="w-full" src="{{ asset('storage/' . $gambar->link) }}"
                        alt="Sunset in the mountains">
                    @endif
                    @empty
                        <img class="w-full" src="https://picsum.photos/200" alt="Sunset in the mountains">
                    @endforelse
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $data->nama }}</div>
                        <p class="text-gray-700 text-base">
                            {{$data->jabatan}} di {{$data->struktur->nama}}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$data->nim}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$data->jabatan}}</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$data->struktur->nama}}</span>
                    </div>
                </div>
                @empty
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink ">
                    <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline shadow">

                            <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">

                            </p>
                            <div class="w-full font-bold text-center text-xl text-gray-800 px-6">
                                DATA KOSONG
                            </div>
                            <div class="w-full font-bold text-center px-6">
                            </div>

                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                        <div class="flex items-center justify-center">
                            <a href="{{route('structure.index')}}"
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </section>
    {{-- end berita --}}
@endsection
