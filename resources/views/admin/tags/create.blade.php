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
    <h2 class="text-2xl font-bold mb-6">Ajouter une Tag</h2>

    <form class="space-y-5" action="{{route('admin.tags.store')}}" method="post">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Nom</label>
            <input type="text" name="nom" class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>

        <div class="flex gap-3">
            <button type="submit" class="flex-1 bg-indigo-600 text-white py-3 rounded-lg font-bold">Créer</button>
            <a href="{{route('admin.index')}}" class="px-6 py-3 border rounded-lg text-gray-500">Annuler</a>
        </div>
    </form>
</div>
</body>
</html>
