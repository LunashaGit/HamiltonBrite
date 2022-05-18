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
<body class="antialiased text-white">

<div class="flex items-top min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 ">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
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

        <div class="mt-8 bg-white dark:bg-gray-700 overflow-hidden shadow sm:rounded-lg flex flex-col text-center place-content-center">

            {{$content}}
        </div>
    </div>
</div>
</body>
</html>
