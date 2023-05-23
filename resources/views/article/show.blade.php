<x-layout header="{{ $article->title }}">

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                   <img src="{{ Storage::url($article->image) }}" alt="immagine di {{ $article->title }}">
                   <p class="text-center"> {{ $article->body }} </p>
                   <hr>
                   <p class="text-center p-2 text-muted"> Creato il : {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }} </p>
                   <a href="{{ route('article.index') }}" class="btn btn-warning"> Torna Indietro </a>

            </div>
        </div>
    </div>



</x-layout>