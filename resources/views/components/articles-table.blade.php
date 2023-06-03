<table class="table table-hover border bg-primaryC tableC">
    <thead class="tableC">
      <tr class="tableC">
        <th class="ashC" scope="col">#</th>
        <th class="titleC" scope="col">Titolo</th>
        <th scope="col"></th>
        <th class="redattoreC" scope="col">Redattore</th>
        <th class="azioniC text-center" scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->subtitle }}</td>
            <td>{{ $article->user->name }}</td>
            <td class="text-center">
                @if(is_null($article->is_accepted))
                    <a href="{{ route('article.show', compact('article')) }}" class="btn btn-info text-white"> <i class="fa-solid fa-eye"></i> </a>
                @else 
                    <a href="{{ route('revisor.undoArticle', compact('article')) }}" class="btn btn-warning text-white "> <i class=" fa-solid fa-pen-to-square"></i> </a> 
                @endif    
            </td>
        </tr>
      @endforeach
        
    </tbody>
  </table>