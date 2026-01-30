<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
<div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm border">
    <h2 class="text-2xl font-bold mb-6 text-orange-600">Modifier l'article #42</h2>

    <form class="space-y-5">
        <div>
            <label class="block text-sm font-medium mb-1">Titre</label>
            <input type="text" value="Ancien Titre : Apprendre Laravel" class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Catégorie</label>
            <select class="w-full border p-3 rounded-lg bg-white">
                <option selected>Développement</option>
                <option>Design</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Contenu</label>
            <textarea rows="5" class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none">Voici le contenu existant de l'article...</textarea>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="flex-1 bg-orange-600 text-white py-3 rounded-lg font-bold">Mettre à jour</button>
            <a href="admin.html" class="px-6 py-3 border rounded-lg text-gray-500">Retour</a>
        </div>
    </form>
</div>
</body>
</html>
