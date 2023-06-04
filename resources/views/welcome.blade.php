<x-layout>
    @if(session('message'))
        <div class="alert alert-success text-center m-0 alertC">
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
                        
                        <div class="input-group mb-3 searchgroup">
                            <input class="form-control form-controlC" type="search" name="query" placeholder="Cosa bolle in pentola?" aria-label="Search">
                            <button class="btn bg-white btnC" type="submit">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>                        
                        
                    </form>
                            
                </div>
                
                {{-- VIDEO --}}
                <div class="video-wrapper">
    
                    <video playsinline autoplay muted loop id="myVideo">
                        <source src="/media/mais.mp4" type="video/mp4">
                    </video>
    
                </div>

            </div>



        </div>
    </div>

    <div class="separatore"></div>


    
    <div class="">

        <a class="d-flex justify-content-center veditutti veditutti2">Le ultime ricette inserite... 
        </a>

    </div>


    <div class="container p-5">
        <div class="row">

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
                            <p class="card-categoryC">
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



        <div class="vedituttiC">

            <a href="{{route('article.index')}}" class="d-flex justify-content-center veditutti">Vedi tutte 
                <i class="fa-solid fa-arrow-right freccia3"></i>
            </a>

        </div>
    </div>
  


</x-layout>