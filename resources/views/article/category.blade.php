<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">{{ $category->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row justify-content-center">
            @foreach($articles as $article)

            <div class="col-12 col-md-3">
                
                <div class="card shadow">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center p-1"> {{ $article->title }} </h5>
                    </div>
                    <div class= "d-flex justify-content-center align-items-center text-center">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning"> Dettagli </a>
                    </div>
                    <hr>
                    <p class="text-center p-2 text-muted"> Creato il : {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }} </p>
                    <a href="{{ route('article.index', compact('article')) }}" class="btn btn-warning"> Torna Indietro </a>
                </div>
                
            </div>
           @endforeach 
        </div>
    </div>

</x-layout>