<x-layout>

    <div class="container-fluid pt-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                {{-- <h1 class="display-1 font-header">Lista degli Articoli</h1> --}}
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row justify-content-center">

            @foreach($articles as $article)

            <div class="col-md-4 col-12">

                <div class="card text-bg-dark cardC">

                    <img src="{{ Storage::url($article->image) }}" class="card-img card-imgC" alt="immagine articolo">

                    <div class="card-img-overlay card-title1C">

                        <h5 class="card-title card-titleC">{{ $article->title }}</h5>

                        <p class="card-text ">
                            <small>
                            @if($article->category)
                            <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize card-categoryC">{{$article->category->name}}</a>
                            @else
                            <p class="small text-muted fst-italic text-capitalize card-textC">
                                Non categorizzato
                            </p>
                            @endif
                            </small>
                        </p>

                        <p class="small fst-italic text-capitalize card-tagC">
                            @foreach($article->tags as $tag)
                                #{{$tag->name}}
                            @endforeach
                        </p>

                        <div class= "text-muted d-flex justify-content-end align-items-end text-end ">
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning freccia"> 
                                    
                                <div>

                                    <i class="fa-solid fa-arrow-right freccia1"></i>                      
                                </div>
                            </a>
                        </div>
                    </div>


                </div>

            </div>
            
            @endforeach
            {{-- @foreach($articles as $article)

            
            <div class="col-12 col-md-3 pb-5">
                
                <div class="card shadow my-3 card-custom">
                    <div class="div-custom">

                        <img src="{{ Storage::url($article->image) }}" class="card-img-top img-custom" alt="...">

                    </div>
                    
                    <div class="card-body">
                      <h5 class="card-title text-center p-1"> {{ $article->title }} </h5>
                      <p class="text-center">
                        <a href="{{route('article.byCategory', ['category'=>$article->category->id])}}" class="small text-muted text-center">{{$article->category->name}}</a>
                      </p>
                      <p class="text-center display-5"> {{ $article->price }}€ </p>
                      <p class="small fst-italic text-capitalize">
                        @foreach($article->tags as $tag)
                            #{{$tag->name}}
                        @endforeach
                      </p>
                    </div>
                    <div class= "text-muted d-flex justify-content-center align-items-center text-center">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning mb-3"> Dettagli </a>
                    </div>
                </div>
                
            </div>
           @endforeach  --}}
        </div>
    </div>



</x-layout>