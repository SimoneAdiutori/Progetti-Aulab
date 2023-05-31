<table class="table table-striped table-hover border">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Tags</th>      
        <th scope="col">Creato il</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->category }}</td>
            <td>{{ $article->user->name ?? 'Non categorizzato'}}</td>
            <td>
               @foreach($article->tags as $tag)
                    {{ $tag->name }},
               @endforeach    
            </td>
            <td>
                {{ $article->created_at->format('d/m/Y')}}
            </td>
            <td>
                <a href="{{ route('article.show' , compact('article'))}}" class="btn btn-info text-white">Leggi la ricetta</a>
                <a href="{{ route('article.edit' , compact('article'))}}" class="btn btn-warning text-white">Apporta le tue modifiche</a>
                <form action="" method="" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Elimina la ricetta</button>
                </form>
            </td>
        </tr>
      @endforeach
        
    </tbody>
  </table>