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
    <link href="../ressources/css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
          integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
          crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
            crossorigin=""></script>
</head>
<body class="antialiased body transition duration-300 ease-in-out">
    <nav id="navbar"
        class="fixed z-[500] top-0 left-0 w-full md:justify-between p-4 text-gray-800 dark:text-whitesmoke dark:bg-gray-800 shadow bg-lightgrey md:flex md:items-center transition-all ease-in duration-500">
        <div class="flex my-auto ">
            <span class="text-xl md:text-2xl cursor-pointer">
                <img class="inline mb-[.40em]" src="../assets/logo.svg">
                <a href="/">Hamilton Brite</a>

            </span>
            <div class="theme-container shadow-dark pl-4 lg:pl-8 mb-[.40em]">
                <img class="" id="theme-icon"
                    src="https://www.uplooder.net/img/image/2/addf703a24a12d030968858e0879b11e/moon.svg" alt="ERR">
            </div>
            <span class="menu flex mx-1 mt-[.15em] text-3xl cursor-pointer md:hidden absolute right-[5%]">
                <svg id="burger" data-name="menu" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 menu" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </span>
        </div>


        <ul
            class="burger-links text-base md:text-lg md:flex text-gray-800 dark:text-whitesmoke dark:bg-gray-800 md:items-center z-[500] md:static absolute bg-lightgrey w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">

            @auth()
                <li class="mx-2 md:mx-4 my-6 md:my-0">
                    <a href="/" class="duration-500 hover:text-lightblue">HOME</a>
                </li>

                <li class="mx-2 md:mx-4 my-6 md:my-0">
                    <a href="/new" class="duration-500 hover:text-lightblue">CREATE</a>
                </li>
                <li class="mx-2 md:mx-4 my-6 md:my-0">
                    <a href="/profile" class="duration-500 hover:text-lightblue">PROFILE</a>
                </li>
                @if (request()->user()->is_admin == 1)
                    <li class="mx-2 md:mx-4 my-6 md:my-0">

                        <a class=" duration-500 hover:text-lightblue " href="{{ route('admin.view') }}">ADMIN</a>
                    </li>
                @endif
                <form class="mx-2 md:mx-4 my-6 md:my-0" method="POST" action="/logout">
                    @csrf
                    <input class="duration-500 hover:text-lightblue" type="submit" value="LOG OUT">
                </form>
            @else
                <li class="mx-2 md:mx-4 my-6 md:my-0">
                    <a href="/" class="duration-500 hover:text-lightblue">HOME</a>
                </li>
                <li class="mx-2 md:mx-4 my-6 md:my-0">
                    <a href="/event" class="duration-500 hover:text-lightblue">CREATE</a>
                </li>
                <li class="mx-2 md:mx-4 my-6 md:my-0">
                    <a href="/login" class="duration-500 hover:text-lightblue">LOGIN</a>
                </li>
                <button
                    class="bg-lightblue text-white font-[Poppins] duration-500 px-6 py-2 mx-2 hover:bg-lightblue rounded">
                    <a href="/register">REGISTER</a>
                </button>
            @endauth
        </ul>
    </nav>
    <div
        class="min-h-screen text-gray-700 bg-lightgrey dark:text-whitesmoke dark:bg-gray-700 lg:text-xl document font-nunito transition ease-in duration-500">
        <div class="min-h-screen overflow-hidden text-center place-content-center">
            {{ $content }}
        </div>

    </div>

    <footer
        class="w-full h-36 mt-36 text-white dark:bg-gray-800 bg-silver-blue text-sm md:text-base lg:text-lg text-center">
        <div class="px-4 md:px-12 pt-8">
            <div class="h-full">
                <div class="flex float-left">
                    <ul class="flex flex-col">
                        <a class="cursor-pointer" target="_blank"
                            href="https://www.linkedin.com/search/results/all/?keywords=luna%20muylkens&origin=RICH_QUERY_SUGGESTION&position=0&searchId=abd875ca-78eb-4d32-914f-89f2edcfa02e&sid=5kD"
                            alt="link to Luna Muylken's Linked in profile">
                            <li class="flex items-center">
                                <?xml version="1.0" encoding="iso-8859-1"?>
                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <!DOCTYPE svg
                                    PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                <svg class="flex items-center mr-2" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="16px" height="16px" viewBox="0 0 32 32" fill="currentColor"
                                    style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                    <>
                                        <path
                                            d="M17.303,14.365c0.012-0.015,0.023-0.031,0.031-0.048v0.048H17.303z M32,0v32H0V0H32L32,0z M9.925,12.285H5.153v14.354
                            h4.772V12.285z M10.237,7.847c-0.03-1.41-1.035-2.482-2.668-2.482c-1.631,0-2.698,1.072-2.698,2.482
                            c0,1.375,1.035,2.479,2.636,2.479h0.031C9.202,10.326,10.237,9.222,10.237,7.847z M27.129,18.408c0-4.408-2.355-6.459-5.494-6.459
                            c-2.531,0-3.664,1.391-4.301,2.368v-2.032h-4.77c0.061,1.346,0,14.354,0,14.354h4.77v-8.016c0-0.434,0.031-0.855,0.157-1.164
                            c0.346-0.854,1.132-1.746,2.448-1.746c1.729,0,2.418,1.314,2.418,3.246v7.68h4.771L27.129,18.408L27.129,18.408z" />
                                </svg>
                                Luna Muylkens
                            </li>
                        </a>
                        <a class="cursor-pointer" target="_blank" alt="link to Luna Muylkens's github page"
                            href="https://github.com/LunashaGit">
                            <li class="flex items-center py-4 "><svg class="flex items-center mr-2" width="20px"
                                    height="20px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" class="bi bi-github">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg>Luna Muylkens</li>
                        </a>
                    </ul>
                </div>

                <div class="flex float-right">
                    <ul class="flex flex-col">
                        <a class="cursor-pointer" target="_blank" alt="Link to Jerry Cullmann's Linked-in profile page"
                            href="https://www.linkedin.com/in/jerry-cullmann-3baa9a128/">
                            <li class="flex items-center">
                                Jerry Cullmann

                                <?xml version="1.0" encoding="iso-8859-1"?>
                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <!DOCTYPE svg
                                    PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                <svg class="flex items-center ml-2" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="16px" height="16px" viewBox="0 0 32 32" fill="currentColor"
                                    style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                    <path
                                        d="M17.303,14.365c0.012-0.015,0.023-0.031,0.031-0.048v0.048H17.303z M32,0v32H0V0H32L32,0z M9.925,12.285H5.153v14.354
                            h4.772V12.285z M10.237,7.847c-0.03-1.41-1.035-2.482-2.668-2.482c-1.631,0-2.698,1.072-2.698,2.482
                            c0,1.375,1.035,2.479,2.636,2.479h0.031C9.202,10.326,10.237,9.222,10.237,7.847z M27.129,18.408c0-4.408-2.355-6.459-5.494-6.459
                            c-2.531,0-3.664,1.391-4.301,2.368v-2.032h-4.77c0.061,1.346,0,14.354,0,14.354h4.77v-8.016c0-0.434,0.031-0.855,0.157-1.164
                            c0.346-0.854,1.132-1.746,2.448-1.746c1.729,0,2.418,1.314,2.418,3.246v7.68h4.771L27.129,18.408L27.129,18.408z" />
                                </svg>
                            </li>
                        </a>
                        <a class="cursor-pointer" target="_blank" alt="Link to Jerry Cullmann's github page"
                            href="https://github.com/JerryCullmann">
                            <li class="flex items-center py-4">Jerry Cullmann
                                <svg class="flex items-end ml-2" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<script src="../ressources/js/nav.js"></script>
<script src="../ressources/js/parallax.js"></script>
<script src="../ressources/js/preload-image.js"></script>
<script src="../ressources/js/dark-mode.js"></script>
<script src="/ressources/js/map.js"></script>


</body>
</html>
