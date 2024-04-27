<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="flex min-h-screen">
        <div class="relative hidden lg:block h-screen w-1/2 bg-black overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ asset('img/guest.png') }}" alt="hero image">
            <div class="py-12 px-16 container absolute flex flex-col h-full z-20 top-0 justify-end">
                <div class="w-full flex items-center gap-2">
                    {{-- <x-application-logo class="w-12 h-12 fill-current text-white" /> --}}
                    <span class="text-white text-xl font-bold">Rumah Sehat Ad-Dawaa'</span>
                </div>
            </div>
        </div>
        <div class="h-screen w-full lg:w-1/2 bg-white flex items-center">
            <div class="p-12 w-full lg:p-28">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>