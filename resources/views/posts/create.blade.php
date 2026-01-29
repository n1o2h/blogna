<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<!-- component -->
<div class="max-w-screen-lg mx-auto">
    <!-- header -->
    <header class="flex items-center justify-between py-2">
        <a href="" class="px-2 lg:px-0 font-bold capitalize">
            BLOGNA
        </a>
        <button class="block md:hidden px-2 text-3xl">
            <i class='bx bx-menu'></i>
        </button>
        <ul class="hidden md:inline-flex items-center">
            <li class="px-2 md:px-4">
                <a href="/posts" class="text-green-800 font-semibold hover:text-green-600"> Accueil </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="/posts/create" class="text-gray-500 font-semibold hover:text-green-600"> Créer Un Post </a>
            </li>
        </ul>

    </header>
    <!-- header ends here -->

    <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Creer un Post</h2>

        <form class="space-y-4" action="/posts/store" method="post">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input
                    type="text"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                    placeholder="title"
                    name="title"
                />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Categorie</label>
                <input
                    type="text"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                    placeholder="••••••••"
                    name="categorie_id"
                    value=""
                />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <input
                    type="text"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                    placeholder="••••••••"
                    name="description"
                />
            </div>
            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-black font-medium py-2.5 rounded-lg transition-colors" type="submit" >
                Créer post
            </button>
        </form>
    </div>
</div>
</body>
</html>
