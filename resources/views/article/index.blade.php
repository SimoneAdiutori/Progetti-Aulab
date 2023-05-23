<x-layout header="Lista degli Articoli">

    <div class="container p-5">
        <div class="row justify-content-center">
            @foreach($articles as $article)

            
            <div class="col-12 col-md-3">
                
                <div class="card shadow my-3">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center p-1"> {{ $article->title }} </h5>
                      <p class="small text-muted text-center"> {{ $article->category->name }} </p>
                      <p class="text-center display-5"> {{ $article->price }}€ </p>
                    </div>
                    <div class= "text-muted d-flex justify-content-center align-items-center text-center">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning mb-3"> Dettagli </a>
                    </div>
                </div>
                
            </div>
           @endforeach 
        </div>
    </div>



</x-layout>