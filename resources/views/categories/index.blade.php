<a href="{{ route('categories.create')}}"> create categorie</a>

@foreach($categories as $categorie)
    <br>
    {{ $categorie }}
    <br>
    <a href="{{ route('categories.show', $categorie)}}"> show categorie</a>

@endforeach
