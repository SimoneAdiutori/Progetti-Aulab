<x-layout>

    <div class="container-fluid pt-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-5 lavori">Le ricette di <span class="underline">{{ $user->name }}</span> </h1>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row justify-content-center">
            @foreach($articles as $article)

            <div class="col-md-4 col-12">

                <div class="card text-bg-dark cardC">

                    {{-- IMMAGINE (SFONDO) --}}
                    <img src="{{ Storage::url($article->image) }}" class="card-img card-imgC" alt="immagine articolo">

                    {{-- CORPO --}}
                    <div class="card-img-overlay boxC">
                        
                        {{-- TITOLO E CATEGORIA --}}
                        <div class=" boxcard1">

                            {{-- TITOLO --}}
                            <h5 class="card-title card-titleC">{{ $article->title }}</h5>

                            {{-- CATEGORIA --}}
                            <p class="categoryC">
                                <small>
                                
                                @if($article->category)
                                
                                <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted text-capitalize card-categoryC">{{$article->category->name}}</a>
                                
                                @else
                                
                                <p class="small text-muted fst-italic text-capitalize card-textC">
                                    Non categorizzato
                                </p>
                                
                                @endif
    
                                </small>
                            </p>
                            
                        </div >

                        {{-- TAG --}}
                        <div class="bg-whiteC tagC">

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
                                    <i class="fa-solid fa-arrow-right freccia3"></i>                      
                                </div>

                            </a>
                        </div>

                    </div>

                </div>

            </div>
            
            @endforeach
            
        </div>
    </div>

</x-layout>