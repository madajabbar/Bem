<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <title>BEM UNTAN</title>
    <style>
        .gradient {
            background: linear-gradient(90deg, #286CB3 0%, #01A9A3 100%);
        }

    </style>
</head>

<body class="leading-normal tracking-normal text-white bg-gray-50 font-mono">
    @include('layouts.components.navbar')
    {{-- header --}}
    @yield('content')
    @include('layouts.components.footer')



    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/datepicker.js"></script>
</body>

</html>
