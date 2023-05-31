<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">{{ $category->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            @foreach($articles as $article)

            <div class="col-md-4 col-12">

                <div class="card text-bg-dark cardC">

                    <img src="{{ Storage::url($article->image) }}" class="card-img card-imgC" alt="immagine articolo">

                    <div class="card-img-overlay card-title1C">

                      <h5 class="card-title card-titleC">{{ $article->title }}</h5>

                      <p class="card-text "><small>
                        @if($article->category)
                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize card-categoryC">{{$article->category->name}}</a>
                    @else
                        <p class="small text-muted fst-italic text-capitalize card-textC">
                            Non categorizzato
                        </p>
                    @endif
                    </small></p>

                    <p class="small fst-italic text-capitalize card-tagC">
                        @foreach($article->tags as $tag)
                            #{{$tag->name}}
                        @endforeach
                    </p>

                    <div class= "text-muted d-flex justify-content-end align-items-end text-end ">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning freccia"> 
                                
                            <div>
                                <i class="fa-solid fa-arrow-right freccia3"></i>                      
                            </div>
                        </a>
                    </div>

                    </div>

                </div>

            </div>
            
            @endforeach
            {{-- @foreach($articles as $article)

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
           @endforeach  --}}
        </div>
    </div>

</x-layout>