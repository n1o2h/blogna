<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Créer un Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
<div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm border">
    <h2 class="text-2xl font-bold mb-6">Ajouter un Post</h2>

    <form class="space-y-5" action="{{route('admin.posts.store')}}" method="post">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Titre</label>
            <input type="text" name="title" class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Catégorie</label>
            <select class="w-full border p-3 rounded-lg bg-white" name="categorie_id">
                @foreach($categories as $categorie)
                    <option  value="{{$categorie->id}}">{{ $categorie->name}}</option>
                @endforeach

            </select>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Tags</label>
            <div class="flex gap-4 text-sm bg-gray-50 p-3 rounded-lg">
                <label><input type="checkbox" class="mr-1"> Laravel</label>
                <label><input type="checkbox" class="mr-1"> PHP</label>
                <label><input type="checkbox" class="mr-1"> Tailwind</label>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Contenu</label>
            <textarea rows="5" name="contenu" class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="flex-1 bg-indigo-600 text-white py-3 rounded-lg font-bold">Publier</button>
            <a href="/admin" class="px-6 py-3 border rounded-lg text-gray-500">Annuler</a>
        </div>
    </form>
</div>
</body>
</html>
