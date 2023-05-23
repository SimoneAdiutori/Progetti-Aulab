<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1">{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                   <img src="{{ Storage::url($article->image) }}" alt="immagine di {{ $article->title }}">
                   <p class="text-center"> {{ $article->body }} </p>
                   <hr>
                   <p class="text-center p-2 text-muted"> Creato il : {{ $article->created_at->format('d/m/Y') }} da <a href="{{route('article.byUser', ['user'=>$article->user->id])}}" class="small text-muted text-center">{{$article->user->name}}</a> </p>
                   <a href="{{ route('article.index') }}" class="btn btn-warning"> Torna Indietro </a>

            </div>
        </div>
    </div>



</x-layout>