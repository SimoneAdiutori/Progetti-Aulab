<x-layout>
    @if(session('message'))
        <div class="alert alert-warning text-center m-0">
            {{session('message')}}
        </div>
    @endif

    {{-- <div class="container-fluid p-5 text-center min-vh-100 d-flex justify-content-center bg-header">
        <div class="row vh-100 w-100 justify-content-center align-items-center"> --}}

                {{-- LOGO --}}
                {{-- <div class="col-12 col-md-12 d-flex justify-content-center" data-aos-duration="2500" data-aos="fade-down-right">
                    <img class="logo-header" src="{{url('/media/bancarellalogo.png')}}" alt="immagine logo bancarella"> --}}
                {{-- s</div> --}}

                {{-- SCRITTA --}}
                {{-- <div class="col-12 col-md-6" data-aos-duration="2500" data-aos="fade-down-left"> --}}
                    {{-- <div>
                        <h1 class="display-1 bg-blackC text-primaryC shadow fs-perso rounded">diNuovo</h1>
                        <h4 class="text-blackC">Compra e vendi il tuo usato</h4>
                        <a class="btn" href=""></a>
                        
                    </div>  --}}
                {{-- </div>  --}}
        {{-- </div>
    </div> --}}

    {{-- <header>


        <div class="video-wrapper2">
    
            <video playsinline autoplay muted loop id="myVideo">
                <source src="/media/video-pot2.mp4" type="video/mp4">
            </video>

        </div>



    </header> --}}

    <div class="headerC">

    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-12 col-md-8 d-flex flex-column align-items-center position-relative headerC2">

                <div class="ricerca">

                    <form class="d-flex align-items-end" method="GET" action="{{route('article.search')}}" role="search">
                        

                        <div class="input-group mb-3">
                            <input class="form-control form-controlC" type="search" name="query" placeholder="Cosa bolle in pentola?" aria-label="Search">
                            <button class="btn bg-white btnC" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></button>
                        </div>

                        
                        
                    </form>
                            
                </div>
                
                <div class="video-wrapper">
    
                    <video playsinline autoplay muted loop id="myVideo">
                        <source src="/media/video-pot2.mp4" type="video/mp4">
                    </video>
    
                </div>

            </div>



        </div>
    </div>

    <div class="separatore"></div>

    <div class="container p-5">
        <div class="row justify-content-center">
            <h2 class="text-center pb-5"></h2>
            @foreach($articles as $article)

            
            <div class="col-12 col-md-6">
                {{-- <h1 class="text-center"> {{ $article->category->name }} </h1> --}}
                
                {{-- <div class="card shadow mb-3 bg-whiteC border-3">
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
                </div> --}}

                <div class="card mb-3 shadow bg-white border-3">
                    <div class="row g-0">
                      <div class="col-md-4 ">
                        <img src="{{ Storage::url($article->image) }}" class="img-fluid rounded-start " alt="immagine articolo">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="text-center">
                                <a href="{{route('article.byCategory', ['category'=>$article->category->id])}}" class="small text-muted text-center">{{$article->category->name}}</a>
                            </p>
                            <p class="small fst-italic text-capitalize">
                            @foreach($article->tags as $tag)
                                #{{$tag->name}}
                            @endforeach
                            </p>
                        </div>
                      </div>
                    </div>
                </div>   
            </div>
           @endforeach 
        </div>
        {{-- <h2 class="text-center">Vedi tutti</h2> --}}
        <a href="{{route('article.index')}}" class="d-flex justify-content-center">Vedi tutti</a>
    </div>

    {{-- CARD DI PROVA (DA RIMUOVERE) --}}
    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="card text-bg-dark cardC">
                    <img src="/media/foto mercato.jpg" class="card-img card-imgC" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    


</x-layout>