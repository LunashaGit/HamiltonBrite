<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(isset($title))
            {{$title}}
        @else
            Error404
            @endif</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/ressources/css/tailwind.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
          integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
          crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
            crossorigin=""></script>
</head>
<body class="antialiased text-white dark:text-black ">

<nav class="p-5 bg-gray-800 shadow md:flex md:items-center md:justify-between text-white">
    <div class="flex my-auto justify-between ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="inline h-6 mb-[.38em]"
             src="assets/logo.svg">
        <a href="/">Hamilton Brite</a>
      </span>

         <span class=" block mx-2 text-3xl cursor-pointer md:hidden">
                <svg id="burger" data-name="menu" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 menu" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
         </span>
    </div>
    <ul class="burger-links bg-white md:bg-gray-800 md:text-white text-black md:flex md:items-center z-[500] md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        @auth()
            <li class="mx-4 my-6 md:my-0">
                <a href="/" class="text-xl duration-500 hover:text-cyan-500">HOME</a>
            </li>
           
            <li class="mx-4 my-6 md:my-0">
                <a href="/new" class="text-xl duration-500 hover:text-cyan-500">CREATE</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/profile" class="text-xl duration-500 hover:text-cyan-500">PROFILE</a>
            </li>
            @if(request()->user()->is_admin == 1)
                <a href="{{route('admin.view')}}">Admin View</a>
            @endif
            <form class="mx-4 my-6 md:my-0" method="POST" action="/logout">
                @csrf
                <input class="text-xl duration-500 hover:text-cyan-500" type="submit" value="LOG OUT">
            </form>

        @else

        <li class="mx-4 my-6 md:my-0">
            <a href="/" class="text-xl duration-500 hover:text-cyan-500">HOME</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/event" class="text-xl duration-500 hover:text-cyan-500">CREATE</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/login" class="text-xl duration-500 hover:text-cyan-500">LOGIN</a>
        </li>
        <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded">
            <a href="/register">REGISTER</a>
        </button>
        @endauth
    </ul>
</nav>
<div class="min-h-screen bg-white dark:bg-gray-800 ">
    <div class="overflow-hidden text-center place-content-center">
        {{$content}}
    </div>
</div>
<script src="ressources/js/nav.js"></script>
{{-- <script src="ressources/js/parallax.js"></script> --}}

</body>
</html>
