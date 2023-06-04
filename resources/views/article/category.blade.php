<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-5 lavori">{{ $category->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            @foreach($articles as $article)

            <div class="col-md-4 col-12 cardC1">

                <div class="card text-bg-dark cardC ">

                    {{-- IMMAGINE (SFONDO) --}}
                    <img src="{{ Storage::url($article->image) }}" class="card-img card-imgC" alt="immagine articolo">

                    {{-- CORPO --}}
                    <div class="card-img-overlay boxC">
                        
                        {{-- TITOLO E CATEGORIA --}}
                        <div class=" boxcard1 mt-3">

                            {{-- TITOLO --}}
                            <h5 class="card-title card-titleC card-titleC2">{{ $article->title }}</h5>

                            {{-- CATEGORIA --}}
                            {{-- <p class="categoryC">
                                <small>
                                
                                @if($article->category)
                                
                                <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted  text-capitalize card-categoryC">{{$article->category->name}}</a>
                                
                                @else
                                
                                <p class="small text-muted fst-italic text-capitalize card-textC">
                                    Non categorizzato
                                </p>
                                
                                @endif
    
                                </small>
                            </p> --}}
                            
                        </div >

                        {{-- TAG --}}
                        <div class="bg-whiteC tagC ">

                            <p class="small fst-italic text-capitalize card-tagC">
                                @foreach($article->tags as $tag)
                                #{{$tag->name}}
                                @endforeach
                            </p>

                        </div>
                        
                        {{-- FRECCIA DETTAGLIO --}}
                        <div class= "text-muted freccetta">
                            <a href="{{ route('article.show', compact('article')) }}" class="btn bg-primaryC freccia"> 
                                    
                                <div>
                                    <i class="fa-solid fa-arrow-right"></i>                      
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