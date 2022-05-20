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
</head>
<body class="antialiased text-white dark:text-black ">

<nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="h-10 inline"
             src="https://tailwindcss.com/_next/static/media/social-square.b622e290e82093c36cca57092ffe494f.jpg">
        tailwind
      </span>

         <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <svg id="burger" data-name="menu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 menu" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
         </span>
    </div>
    <ul class="burger-links md:flex md:items-center z-[500] md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">HOME</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">NEW EVENT</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">ABOUT</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">PROFILE</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">LOGIN</a>
        </li>
        <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded">
            REGISTER
        </button>
    </ul>
</nav>
<div class="flex justify-center min-h-screen bg-white dark:bg-gray-700 sm:items-center py-4 ">
    <div class="mt-8 overflow-hidden text-center place-content-center">
        {{$content}}
    </div>
</div>
<script src="ressources/js/nav.js"></script>
</body>
</html>
