@extends('layouts.frontend')

@section('content')
    <div class="px-12 w-full">
        <div class="container mx-auto my-5">
            <div id="controls-carousel" class="relative" data-carousel="static">

                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-64 rounded-lg sm:0 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    @foreach ($spanduk as $data)
                        @foreach ($data->gambar as $data)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="{{ asset('storage/' . $data->link) }}"
                                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="...">
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-0 left-0 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>

        </div>
        {{-- end header --}}
            <section class="w-7/8">
                <div class="border-b py-8 container mx-auto">

                    <div class="container max-w-5xl mx-auto m-8">
                        <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                            BERANDA
                        </h1>
                        <div class="w-full mb-4">
                            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-5/6 sm:w-1/2 p-6">
                                <div class="align-middle bg-white rounded-lg">
                                    <center>
                                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                            Visi
                                        </h3>

                                    </center>
                                    <p class="text-gray-600 mb-8 ">
                                    {{$visimisi ? $visimisi->visi : 'BEM KBM UNTAN Inklusif & Inovatif'}}
                                    </p>
                                </div>
                            </div>
                                <img class="h-32 md:h-32 lg:h-48 mx-auto rounded-lg" src="{{$visimisi ? asset('storage/'.$visimisi->picture_visi) : asset('images/visi.png') }}"
                                    alt="">

                        </div>
                        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                                <img class="h-48 md:h-32 lg:h-48 mx-auto rounded-lg" src="{{$visimisi ? asset('storage/'.$visimisi->picture_misi) : asset('images/misi.png') }}"
                                    >
                            <div class="w-full sm:w-1/2 p-6 mt-6">
                                <div class="align-middle bg-white rounded-lg">
                                    <center>
                                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                            Misi
                                        </h3>
                                    </center>
                                    <p class="text-gray-600 mb-8 text-justify">
                                        {!!$visimisi ? $visimisi->misi : 'BEM KBM UNTAN Inklusif & Inovatif'!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {{-- end beranda --}}

        {{-- start berita --}}
        <section class=" border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                    Berita Terbaru
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>

                @foreach ($berita as $data)

                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink ">
                        <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline shadow">

                                <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                                    Berita {{ $loop->iteration }}
                                </p>
                                @forelse($data->gambar as $gambar)
                                    @if ($loop->last)
                                        <img class="rounded-t-lg w-5/6 h-48 mx-auto"
                                            src="{{ asset('storage/' . $gambar->link) }}" alt="tes" />
                                    @endif

                                @empty
                                    <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                                        alt="tes" />
                                @endforelse
                                <div class="w-full font-bold text-center text-xl text-gray-800 px-6">
                                    {{ $data->judul }}
                                </div>
                                <p class="text-gray-800 text-base px-6 mb-5" id="isi">
                                    Dibuat pada : {{ $data->created_at->format('Y-m-d') }} <br>
                                    Tag : {{ $data->tag->name }}
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                            <div class="flex items-center justify-center">
                                <a href="{{ url('news/' . $data->id) }}"
                                    class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    lihat berita
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- end berita --}}
        <div class="w-full mb-4">
            <div class="h-1 ml-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        {{-- start kegiatan --}}
        <section class=" border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                    Kegiatan Terbaru
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                @foreach ($kegiatan as $data)
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink ">
                        <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline shadow">

                                <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                                    Kegiatan {{ $loop->iteration }}
                                </p>
                                @forelse($data->gambar as $gambar)
                                    @if ($loop->last)
                                        <img class="rounded-t-lg w-5/6 h-48 mx-auto"
                                            src="{{ asset('storage/' . $gambar->link) }}" alt="tes" />
                                    @endif
                                @empty
                                    <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                                        alt="tes" />
                                @endforelse
                                <div class="w-full font-bold text-center text-xl text-gray-800 px-6">
                                    {{ $data->judul }}
                                </div>
                                <p class="text-gray-800 text-base px-6 mb-5">
                                    Dibuat pada : {{ $data->created_at->format('Y-m-d') }} <br>
                                    Tag : {{ $data->struktur->nama }}
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                            <div class="flex items-center justify-center">
                                <a href="{{ url('activity/' . $data->id) }}"
                                    class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    lihat
                                </a>
                            </div>
                            <div class="flex items-center justify-center">
                                <p class="text-gray-800 text-base px-6 mb-5">
                                    {!! Str::limit($data->deskripsi, 100, $end = '.......') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- end kegiatan --}}
        <div class="w-full mb-4">
            <div class="h-1 ml-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        {{-- start kegiatan --}}
        <section class=" border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                    Video Terbaru
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                @foreach ($video as $data)
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink ">
                        <iframe class="mx-auto" width="560" height="315" src="{{$data->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h4 class="mx-auto animate-bounce text-xl font-bold">{{$data->judul}}</h4>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- end kegiatan --}}
    </div>
@endsection
