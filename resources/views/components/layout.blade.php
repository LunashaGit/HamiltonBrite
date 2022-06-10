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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/ressources/css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
          integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
          crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
            crossorigin=""></script>
</head>
<body class="antialiased body">

<nav class="navbar md:justify-between p-5 text-gray-800 dark:text-whitesmoke dark:bg-gray-800 shadow bg-whitesmoke md:flex md:items-center transition-all ease-in duration-500">
    <div class="flex  my-auto ">
      <span class="text-2xl md:text-3xl cursor-pointer">
        <img class="inline mb-[.42em]"
             src="assets/logo.svg">
        <a href="/">Hamilton Brite</a>
      
      </span>   
      <div class="theme-container shadow-dark pl-4">
        <img id="theme-icon" src="https://www.uplooder.net/img/image/2/addf703a24a12d030968858e0879b11e/moon.svg" alt="ERR">
        </div>
         <span class="menu flex mx-1 mt-[.15em] text-3xl cursor-pointer md:hidden absolute right-[5%]">
                <svg id="burger" data-name="menu" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 menu" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
         </span>
    </div>
  
    
    <ul class="burger-links md:flex text-gray-800 dark:text-whitesmoke dark:bg-gray-800 md:items-center z-[500] md:static absolute bg-whitesmoke w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        
        @auth()
            <li class="mx-4 my-6 md:my-0">
                <a href="/" class="text-xl duration-500 hover:text-lightblue">HOME</a>
            </li>
           
            <li class="mx-4 my-6 md:my-0">
                <a href="/new" class="text-xl duration-500 hover:text-lightblue">CREATE</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/profile" class="text-xl duration-500 hover:text-lightblue">PROFILE</a>
            </li>
            @if(request()->user()->is_admin == 1)
                <a href="{{route('admin.view')}}">Admin View</a>
            @endif
            <form class="mx-4 my-6 md:my-0" method="POST" action="/logout">
                @csrf
                <input class="text-xl duration-500 hover:text-lightblue" type="submit" value="LOG OUT">
            </form>

        @else

        <li class="mx-4 my-6 md:my-0">
            <a href="/" class="text-xl duration-500 hover:text-lightblue">HOME</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/event" class="text-xl duration-500 hover:text-lightblue">CREATE</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/login" class="text-xl duration-500 hover:text-lightblue">LOGIN</a>
        </li>
        <button class="bg-lightblue text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-lightblue rounded">
            <a href="/register">REGISTER</a>
        </button>
        @endauth
    </ul>
</nav>

<div class="min-h-screen text-gray-800 bg-whitesmoke dark:text-whitesmoke dark:bg-gray-800 lg:text-xl document font-nunito ">
    <div class="min-h-screen overflow-hidden text-center place-content-center">
        {{$content}}
    </div>
    
</div>
<footer class="w-full h-64 text-center dark:text-white dark:bg-black bg-silver text-black">
    <div class="py-4 mx-auto my-auto ">
        <ul class="float-left pl-8">
            <li>Github Luna</li>
            <li>Linked-in Luna</li>
        </ul>
        <ul class="float-right pr-8">
            <li>Github Jerry</li>
            <li>Linked-in Jerry</li>
        </ul>
    </div>
</footer>

<script src="ressources/js/nav.js"></script>
<script src="ressources/js/parallax.js"></script>
<script src="ressources/js/preload-image.js"></script>
<script src="ressources/js/dark-mode.js"></script>

</body>
</html>
