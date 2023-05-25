<x-layout>
    @if(session('message'))
        <div class="alert alert-warning text-center m-0">
            {{session('message')}}
        </div>
    @endif

    <div class="container-fluid p-5 text-center min-vh-100 d-flex justify-content-center bg-header">
        <div class="row vh-100 w-100 justify-content-center align-items-center">

                {{-- LOGO --}}
                <div class="col-12 col-md-12 d-flex justify-content-center" data-aos-duration="2500" data-aos="fade-down-right">
                    <img class="logo-header" src="{{url('/media/bancarellalogo.png')}}" alt="immagine logo bancarella">
                {{-- s</div> --}}

                {{-- SCRITTA --}}
                {{-- <div class="col-12 col-md-6" data-aos-duration="2500" data-aos="fade-down-left"> --}}
                    <div>
                        <h1 class="display-1 bg-blackC text-primaryC shadow fs-perso rounded">diNuovo</h1>
                        <h4 class="text-blackC">Compra e vendi il tuo usato</h4>
                        <a class="btn" href=""></a>
                        
                    </div> 
                </div> 
        </div>
    </div>

    <div class="container p-5">
        <div class="row justify-content-center">
            <h2 class="text-center pb-5">Gli ultimi articoli inseriti:</h2>
            @foreach($articles as $article)

            
            <div class="col-12 col-md-3">
                {{-- <h1 class="text-center"> {{ $article->category->name }} </h1> --}}
                
                <div class="card shadow mb-3 bg-whiteC border-3">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="immagine articolo">
                    <div class="card-body">
                      <h5 class="card-title text-center p-1"> {{ $article->title }} </h5>
                      <p class="text-center">
                           <a href="{{route('article.byCategory', ['category'=>$article->category->id])}}" class="small text-muted text-center">{{$article->category->name}}</a>
                      </p>
                      <p class="text-center display-5"> {{ $article->price }}€ </p>
                    </div>
                    <div class= "text-muted d-flex justify-content-center align-items-center text-center pb-3">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning"> Dettagli </a>
                    </div>
                </div>
                
            </div>
           @endforeach 
        </div>
    </div>


</x-layout>