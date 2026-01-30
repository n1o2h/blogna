<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold">Dashboard Admin</h1>
        <a href="posts/create" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm">+ Nouveau Post</a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 border-b font-bold">Posts</div>
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50">
                <tr>
                    <th class="p-4">Titre</th>
                    <th class="p-4">Catégorie</th>
                    <th class="p-4">Actions</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                @foreach($posts as $post)
                    <tr>
                        <td class="p-4">{{ $post->title }}</td>
                        <td class="p-4 text-indigo-600">{{ $post->categorie->name }}</td>
                        <td class="p-4 flex gap-3">
                            <a href="posts/edit" class="text-blue-500">Éditer</a>
                            <form action="/posts/destroy" method="post" >
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

        <div class="space-y-6">
            <div class="bg-white p-5 rounded-xl shadow-sm">
                <h3 class="font-bold mb-4 border-b pb-2">Catégories</h3>
                <ul class="text-sm space-y-2">
                    @foreach($categories as $categorie)
                        <li class="flex justify-between"><span>{{ $categorie->name }}</span> <button class="text-red-400">×</button></li>
                    @endforeach
                </ul>
                <form action="/categories/store" method="post" >
                    @csrf
                    <input type="text" name="name" placeholder="Nouvelle catégorie..." class="w-full mt-4 p-2 text-xs border rounded">
                    <input type="text" name="description" placeholder="Description..." class="w-full mt-4 p-2 text-xs border rounded">
                </form>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-sm">
                <h3 class="font-bold mb-4 border-b pb-2">Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-gray-100 px-2 py-1 rounded text-xs">#php <button class="ml-1">×</button></span>
                    <span class="bg-gray-100 px-2 py-1 rounded text-xs">#js <button class="ml-1">×</button></span>
                </div>
                <form action="/tags/store" method="post" >
                    @csrf
                    <input type="text" name="name" placeholder="Nouveau tag..." class="w-full mt-4 p-2 text-xs border rounded">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
