<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Na - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">
<div class="max-w-5xl mx-auto">
    <nav class="flex justify-between items-center mb-12">
        <h1 class="text-2xl font-black text-indigo-600">Blog Na</h1>
        <a href="{{ route('admin.index') }}" class="text-sm font-medium text-gray-500 hover:text-indigo-600">Accès Admin →</a>
    </nav>

    <div class="mb-10 flex flex-col md:flex-row gap-4">
        <input type="text" placeholder="Rechercher un Post..." class="flex-1 p-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        <select class="p-3 rounded-lg border border-gray-200 bg-white">
            <option>Toutes les catégories</option>
            @foreach($categories as $categorie)
                <option>{{$categorie->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="grid gap-6">
        @foreach($posts as $post)
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex justify-between items-center">
                <div>
                    <span class="text-xs font-bold text-indigo-500 uppercase">{{$post->categorie->name }}</span>
                    <h2 class="text-xl font-bold mt-1">{{ $post->title  }}</h2>
                    <p class="text-gray-500 text-sm mt-2">{{\Illuminate\Support\Str::words( $post->contenu, 30)}}</p>
                    <div class="mt-3 flex gap-2">
                        @foreach($tags as $tag)
                            <span class="text-[10px] bg-gray-100 px-2 py-1 rounded text-gray-400">#{{$tag->nom}}</span>
                        @endforeach
                    </div>
                    <a href="{{route('users.all')}}" > voir plus</a>
                </div>
            </div>
        @endforeach

    </div>
</div>
</body>
</html>
