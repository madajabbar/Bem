@extends('layouts.frontend')

@section('content')
    {{-- start berita --}}
    <section class=" border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                Berita Terbaru
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink ">
                <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline shadow">

                        <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                            Berita 1
                        </p>
                        <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                            alt="tes" />
                        <div class="w-full font-bold text-center text-xl text-gray-800 px-6">
                            Judul
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                            commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6  font-semibold">
                            Berita 2
                        </p>
                        <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                            alt="tes" />
                        <div class="w-full text-center font-bold text-xl text-gray-800 px-6">
                            Judul
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                            commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                            Berita 3
                        </p>
                        <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                            alt="tes" />
                        <div class="w-full text-center font-bold text-xl text-gray-800 px-6">
                            Judul
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                            commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                            Berita 3
                        </p>
                        <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/500/300"
                            alt="tes" />
                        <div class="w-full text-center font-bold text-xl text-gray-800 px-6">
                            Judul
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                            commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                            Berita 3
                        </p>
                        <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                            alt="tes" />
                        <div class="w-full text-center font-bold text-xl text-gray-800 px-6">
                            Judul
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                            commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                            Berita 3
                        </p>
                        <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                            alt="tes" />
                        <div class="w-full text-center font-bold text-xl text-gray-800 px-6">
                            Judul
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                            commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-md rounded-b-none overflow-hidden shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-center text-gray-600 text-xs md:text-sm px-6 font-semibold">
                            Berita 3
                        </p>
                        <img class="rounded-t-lg w-5/6 h-48 mx-auto" src="https://picsum.photos/200/300"
                            alt="tes" />
                        <div class="w-full text-center font-bold text-xl text-gray-800 px-6">
                            Judul
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                            commodo posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6 ">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end berita --}}
@endsection
