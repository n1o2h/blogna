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
                <a href="/login" class="text-green-800 font-semibold hover:text-green-600"> Connexion </a>
            </li>
            <li class="px-2 md:px-4">
                <a href="/posts" class="text-gray-500 font-semibold hover:text-green-600"> Créer Un Post </a>
            </li>
        </ul>

    </header>
    <!-- header ends here -->

    <!-- component -->
    <div class="header my-3 h-12 px-10 flex items-center justify-between">
        <h1 class="font-medium text-2xl">All Categories</h1>
    </div>
    <div class="flex flex-col mx-3 mt-6 lg:flex-row">
        <div class="w-full lg:w-1/3 m-1">
            <form class="w-full bg-white shadow-md p-6" method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-full px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2">Category Name</label>
                        <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]" type="text" name="name" placeholder="Category Name" id="name" required />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <textarea  rows="4" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]" type="text" name="description" id="description" required > </textarea>
                    </div>

                    <div class="w-full md:w-full px-3 mb-6">
                        <button class="appearance-none block w-full bg-green-700 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-3 leading-tight hover:bg-green-600 focus:outline-none focus:bg-white focus:border-gray-500" type="submit"
                        >Add Category</button>
                    </div>
                </div>
            </form>
            <br>
            <a href="{{ route('categories.index') }}">Retour à la liste</a>
        </div>
        <div class="w-full lg:w-2/3 m-1 bg-white shadow-lg text-lg rounded-sm border border-gray-200">
            <div class="overflow-x-auto rounded-lg p-3">
                <table class="table-auto w-full">
                    <thead class="text-sm font-semibold uppercase text-gray-800 bg-gray-50 mx-auto">
                    <tr>
                        <th></th>
                        <th><svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5 mx-auto"><path d="M6 22h12a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zm7-18 5 5h-5V4zm-4.5 7a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 8.5 11zm.5 5 1.597 1.363L13 13l4 6H7l2-3z"></path></svg></th>
                        <th class="p-2">
                            <div class="font-semibold">Category</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Description</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Action</div>
                        </th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><img src="https://images.pexels.com/photos/25652584/pexels-photo-25652584/free-photo-of-elegant-man-wearing-navy-suit.jpeg?auto=compress&cs=tinysrgb&w=400" class="h-8 w-8 mx-auto" /></td>
                        <td></td>
                        <td></td>
                        <td class="p-2">
                            <div class="flex justify-center">
                                <a href="" class="rounded-md hover:bg-green-100 text-green-600 p-2 flex justify-between items-center">
                                        <span><FaEdit class="w-4 h-4 mr-1"/>
                                        </span> Edit
                                </a>
                                <button class="rounded-md hover:bg-red-100 text-red-600 p-2 flex justify-between items-center">
                                    <span><FaTrash class="w-4 h-4 mr-1" /></span> Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>

</div>
