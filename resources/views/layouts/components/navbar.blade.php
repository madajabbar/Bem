{{-- navbar --}}
<div id="sidebar" class="h-screen w-16 menu gradient text-white px-4 flex items-center static fixed shadow">

    <ul class="list-reset ">
        <img src="{{asset('images/logo_bem.png')}}" alt="">
        <li class="my-2 md:my-0">
            <a href="{{route('home.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-stack"></i>
                <span class="pl-3">BERANDA</span>
            </a>
        </li>
        <li class="my-2 md:my-0 ">
            <a href="{{route('structure.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-person-fill"></i>
                <span class="pl-3">PROFIL</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('news.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-newspaper"></i>
                <span class="pl-3">BERITA</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('activity.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-check-all"></i>
                <span class="pl-3">KEGIATAN</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('info.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-info"></i>
                <span class="pl-3">INFORMASI</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('layanan.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-patch-question"></i>
                <span class="pl-3">LAYANAN <br> MAHASISWA</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('calendar.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-calendar-day"></i>
                <span class="pl-3">KALENDER</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('galery.index')}}" class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-card-image"></i>
                <span class="pl-3">GALERI</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="{{route('videos.index')}}" class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="bi bi-card-image"></i>
                <span class="pl-3">VIDEO</span>
            </a>
        </li>
        {{-- <li class="my-2 md:my-0">
            <a href="{{route('layanan.index')}}" class="text-light block py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-300">
                <i class="fa fa-wallet fa-fw mr-3"></i><span class="pl-3">HUBUNGI KAMI</span>
            </a>
        </li> --}}
    </ul>

</div>
{{-- end navbar --}}
