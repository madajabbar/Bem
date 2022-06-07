@extends('layouts.frontend')

@section('content')
<section class="border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            GALERI
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="p-20 mx-auto space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-3">
            @forelse ($galeri as $data)
                <div class="w-full rounded-lg">
                    <img src="{{asset('storage/'.$data->link)}}" alt="" class="w-full">
                    <h1 class="text-lg text-center text-gray-800 font-bold leading-none mb-3">{{$data->name}}</h1>
                </div>
            @empty
            <div class="w-full rounded-lg">
                <h1 class="text-lg text-center text-gray-800 font-bold leading-none mb-3">TIDAK ADA FOTO</h1>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
