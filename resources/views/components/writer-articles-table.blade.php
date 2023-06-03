<table class="table table-hover border tableC">
    <thead class="tableC">
      <tr>
        <th class="th1">#</th>
        <th class="th2">Titolo</th>
        <th class="th3">Categoria</th>
        <th class="th4">User</th>
        <th class="th5">Tags</th>      
        <th class="th6">Creato il</th>
        <th class="th7 text-center">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->category->name ?? 'Non categorizzato'}}</td>
            <td>{{ $article->user->name}}</td>
            <td>
               @foreach($article->tags as $tag)
                    {{ $tag->name }}
               @endforeach    
            </td>
            <td>
                {{ $article->created_at->format('d/m/Y')}}
            </td>
            <td class="text-center">
                <a href="{{ route('article.show' , compact('article'))}}" class="btn btn-info text-white"><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('article.edit' , compact('article'))}}" class="btn btn-warning text-white"> <i class=" fa-solid fa-pen-to-square"></i> </a>
                <form action="{{route('article.destroy', compact('article'))}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                </form>
            </td>
        </tr>
      @endforeach
        
    </tbody>
  </table>