<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(isset($title)) {{$title}} @else Error404 @endif</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="/ressources/css/tailwind.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased text-black">

<div class="flex min-h-screen bg-gray-100 dark:bg-blue-500 sm:items-center py-4 ">
    <div class="mx-auto sm:px-6 lg:px-8">
        @auth
            <div>
                <a href="/">Accueil</a>
                <a href="/profile">Profile page</a>
                <a href="/event">Creation Event Page</a>
                <form method="POST" action="/logout">
                    @csrf
                    <input type="submit" value="Log Out">
                </form>
            </div>
        @else
            <div class="flex place-content-around">
                <a href="/">Accueil</a>
                <a href="/login">Login Page</a>
                <a href="/register">Register page</a>
            </div>
        @endauth
        <div class="mt-8 overflow-hidden text-center place-content-center grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            {{$content}}
        </div>
    </div>
</div>
</body>
</html>
