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

    <main class="mt-12">
        <!-- featured sec               tion -->
        <div class="flex  md:flex-no-wrap space-x-0 md:space-x-6 mb-16">
            <!-- main post -->

            <div class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
                <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded-md object-cover w-full h-64">
                <span class="text-green-700 text-sm hidden md:block mt-4">category </span>
                <span class="text-green-700 text-sm hidden md:block mt-4"> #Tags #Tags #Tags #Tags #Tags #Tags #Tags #Tags #Tags  </span>
                <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
                    Title
                </h1>
                <p class="text-gray-600 mb-4">
                    Description:
                    Necessary ye contented newspaper zealously breakfast he prevailed. Melancholy middletons yet understood
                    decisively boy law she. Answer him easily are its barton little. Oh no though mother be things simple
                    itself.
                    Oh be me, sure wise sons, no. Piqued ye of am spirit regret. Stimulated discretion impossible admiration in particular conviction up.
                </p>
                <a href="/details" class="inline-block px-6 py-3 mt-2 rounded-md bg-green-700 text-gray-100">
                    Read more
                </a>
            </div>


            <!-- sub-main posts -->
            <div class="w-full md:w-4/7">
                <!-- post 1 -->
                @foreach($categories as $categorie)
                <div class="rounded w-full flex flex-col md:flex-row mb-10">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
                    <div class="bg-white rounded px-4">
                        <span class="text-green-700 text-sm hidden md:block"> {{$categorie->name}} </span>
                        <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                            title
                        </div>
                        <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                             {{$categorie->description}}

                        </p>
                    </div>
                </div>
                @endforeach
                <a href="{{route('categories.all')}}" class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
                    View all
                </a>

                <!-- post 2 -->

                <!-- post 3 -->

                <!-- post 4 -->


            </div>

        </div>
        <!-- end featured section -->


        <!-- recent posts -->
        <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
            <h2 class="font-bold text-3xl">Latest news</h2>
            <a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
                View all
            </a>
        </div>
        <div class="block space-x-0 lg:flex lg:space-x-6">

            <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
                <img src="https://images.unsplash.com/photo-1526666923127-b2970f64b422?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
                <div class="p-4 pl-0">
                    <h2 class="font-bold text-2xl text-gray-800">title</h2>
                    <p class="text-gray-700 mt-2">
                        Description:
                        Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions.
                        So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof his head the what.
                    </p>

                    <a href="/detail" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
                </div>
            </div>


        </div>
        <!-- end recent posts -->

    </main>
    <!-- main ends here -->

    <!-- footer -->
    <footer class="border-t mt-12 pt-12 pb-32 px-4 lg:px-0">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-2/5">
                <p class="text-gray-600 hidden lg:block p-0 lg:pr-12">
                    Description of the project platforme
                </p>
            </div>

            <div class="w-full mt-6 lg:mt-0 md:w-1/2 lg:w-1/5">
                <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
                <ul>
                    <li> <a href="#" class="block text-gray-600 py-2">Team</a> </li>
                    <li> <a href="#" class="block text-gray-600 py-2">About us</a> </li>
                    <li> <a href="#" class="block text-gray-600 py-2">Press</a> </li>
                </ul>
            </div>

            <div class="w-full mt-6 lg:mt-0 md:w-1/2 lg:w-1/5">
                <h6 class="font-semibold text-gray-700 mb-4">Content</h6>
                <ul>
                    <li> <a href="#" class="block text-gray-600 py-2">Blog</a> </li>
                    <li> <a href="#" class="block text-gray-600 py-2">Privacy Policy</a> </li>
                    <li> <a href="#" class="block text-gray-600 py-2">Terms & Conditions</a> </li>
                    <li> <a href="#" class="block text-gray-600 py-2">Documentation</a> </li>
                </ul>
            </div>

            <div class="w-full mt-6 lg:mt-0 md:w-1/2 lg:w-1/5">
                <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
                <ul>
                    <li> <a href="#" class="block text-gray-600 py-2">Team</a> </li>
                    <li> <a href="#" class="block text-gray-600 py-2">About us</a> </li>
                    <li> <a href="#" class="block text-gray-600 py-2">Press</a> </li>
                </ul>
            </div>

        </div>
    </footer>
</div>

</body>
</html>
