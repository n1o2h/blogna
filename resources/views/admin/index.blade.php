<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold">Dashboard Admin</h1>
        <a  href="{{ route('admin.posts.create') }}" class="text-blue-500"> + Nouveau Post</a>

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
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-500">Éditer</a>
                            <form action="{{route('admin.destroy', $post)}}" method="post" >
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500" value
                                >Supprimer</button>
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
                        <li class="flex justify-between"><span>{{ $categorie->name }}</span>
                            <div class="flex justify-between">
                                <a href="{{route('admin.categories.edit', $categorie)}}" class="text-red-400 px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                                <form action="{{route('admin.categories.destroy', $categorie)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <form action="{{route('admin.categories.create')}}" method="get" >
                    @csrf
                    <button class="w-full mt-4 p-2 text-xs bg-indigo-600 text-white border rounded" type="submit">Créer</button>
                </form>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-sm">
                <h3 class="font-bold mb-4 border-b pb-2">Tags</h3>
                <div class="flex flex-wrap gap-2 mb-3">
                    @foreach($tags as $tag)
                        <span class="bg-gray-100 px-2 py-2 rounded text-xs flex">#{{$tag->nom}}
                            <form action="{{route('admin.tags.destroy', $tag)}}" method="post" >
                                @csrf
                                @method('DELETE')
                                <button class="ml-1">×</button>
                            </form>
                        </span>
                    @endforeach
                </div>
                <a  href="{{ route('admin.tags.create') }}" class="w-full mt-7 p-2 text-xs bg-indigo-600 text-white border rounded"> + Nouveau Tag</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
