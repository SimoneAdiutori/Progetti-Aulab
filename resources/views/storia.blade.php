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

                <div class="container">
 
                    <div class="row">

 
                        <h2 class="title-chisiamo"> È una questione di tradizione, storia ed emozioni. È cultura.</h2>

                        {{-- <div class="col-12 col-md-3">

                            <div class="scheda">
                                <div class="fotoprofilo">
                                    <img src="" alt="">
                                </div>
                                <div class="testoprofilo">
                                    <h3 class="nomecognome">Nome Cognome</h3>

                                    <div class="d-flex flex-row justify-content-center gap-2">

                                        <div class="social">
                                            <a href="">
                                                <i class="fa-brands fa-github iconC"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="">
                                                <i class="fa-brands fa-linkedin iconC"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                
                        </div> --}}

                        <div class="video-wrapper">
    
                            <video playsinline autoplay muted loop id="myVideo">
                                <source src="/media/chisiamo.mov" type="video/mp4">
                            </video>
            
                        </div>

                      
        

                    </div>
                </div>
                

            </div>



        </div>

    </div>

    <div class="separatore"></div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 testichisiamo">
                {{-- <h2> È una questione di tradizione e storia, esperienze ed emozioni. È cultura.</h2> --}}
                    <p>

                        ​Nati nel 2023, oggi siamo un magazine multimediale che pubblica ricette online
                        <br>
                        I nostri obiettivi sono:

                    </p>
                    <ul>
                        <li class="liC2">
                            <span class="liC">
                                LASCIARE IL SEGNO 
                            </span>
                            <br>
                            Avere un impatto a lungo termine sull’industria della ristorazione attraverso contenuti ricchi di informazioni ed ispirazione al fine di catturare l’attenzione e l’interesse del nostro pubblico.
                        </li>
                        <li class="liC2">
                            <span class="liC">
                                CONNETTERE
                            </span>
                            <br>
                            Mostrare che il cibo è il più importante connettore culturale che abbiamo a disposizione.
                        </li>
                        <li class="liC2">
                            <span class="liC">ISPIRARE</span>
                            <br>
                            Ispirare le persone a viaggiare avendo il cibo come bussola.
                        </li>
                        <li class="liC2">
                            <span class="liC">
                                INCLUDERE
                            </span>
                            <br>
                            Focalizzarci sull’importanza dell’inclusione all’interno dell’industria gastronomica.
                        </li>
                        <li class="liC2">
                            <span class="liC">EDUCARE</span>
                            <br>
                            Insegnare alle persone come cucinare cibo delizioso nella propria cucina.
                        </li>

                    </ul>
                    <p>
                        Promuoviamo l’inclusione e l’equità nell’industria gastronomica attraverso contenuti che siano di ispirazione, per aiutare i nostri lettori ad essere sempre ispirati e a scoprire piatti sempre nuovi.
                    </p>
                    
            </div>
        </div>
    </div>



  


</x-layout>