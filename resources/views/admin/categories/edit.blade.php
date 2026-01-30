<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
<div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm border">
    <h2 class="text-2xl font-bold mb-6 text-orange-600">Modifier la categorie</h2>

    <form class="space-y-5" method="post" action="{{route( 'admin.categories.update', $categorie)}}">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium mb-1">Nouveau Nom</label>
            <input type="text" name="name" value="{{$categorie->name}}" class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Description</label>
            <textarea rows="5" name="description" class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none">{{ $categorie->description }}</textarea>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="flex-1 bg-orange-600 text-white py-3 rounded-lg font-bold">Mettre à jour</button>
            <a href="{{route('admin.index')}}"  class="px-6 py-3 border rounded-lg text-gray-500">Retour</a>
        </div>
    </form>
</div>
</body>
</html>
