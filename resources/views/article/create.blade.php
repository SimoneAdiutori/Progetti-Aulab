<x-layout>

    {{-- <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">Carica il tuo prodotto</h1>
            </div>
        </div>
    </div> --}}
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container container-custom my-5">
        <div class="row justify-content-center">

            <div class="col-md-8 col-12 d-flex flex-row">
                <form class="p-5 shadow bg-primaryC rounded formcreateC bodyC" method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    <h1 class="display-1 font-header text-center">Nuova ricetta</h1>

                    <div class="container">
                        <div class="row">
                            <div class=" col-md-6 col-12 align-items-center d-flex justify-content-center">
                                <div class="video-wrapper-create">
                    
                                    <video laysinline autoplay muted loop id="myVideo2">
                                        <source src="/media/video-create.mp4" type="video/mp4">
                                    </video>
                    
                                </div>
                                
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    {{-- <h1 class="display-1 font-header text-center">Nuova ricetta</h1> --}}
                             
                                    @csrf
                                    <div class="mb-3">
                                        {{-- <label for="title" class="form-label" >Titolo</label> --}}
                                        <input type="text" class="form-control" placeholder="Titolo" id="title" name="title" value="{{ old('title') }}">
                                    </div>
                    
                                    <div class="mb-3">
                                        {{-- <label for="category" class="form-label">Categoria:</label> --}}
                                        <select class="form-control text-capitalize" name="category" id="category">
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                    
                                    <div class="mb-3">
                                        {{-- <label for="body" class="form-label">Descrizione</label> --}}
                                        <textarea class="form-control" placeholder="Descrivi tutti i passaggi" name="body" id="body" cols="30" rows="7">{{ old('body') }}</textarea>
                                    </div>
                    
                                    <div class="mb-3">
                                        {{-- <label for="image" class="form-label">Immagine</label> --}}
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                    
                                    <div class="mb-3">
                                        {{-- <label for="price" class="form-label">Tempo di preparazione</label> --}}
                                        <input type="text" name="price" placeholder="Minuti di preparazione" class="form-control" id="price">
                                    </div>
            
                                    <div class="mb-3">
                                        <label for="tags" class="form-label">Tags:</label>
                                        <input name="tags" class="form-control" id="tags" value="{{old('tags')}}">
                                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                        
                <div class="div-C">
                    <button type="" class="btn btn-primary btn-login">Inserisci</button>

                </div>
                    </div>





                
                    </div>

            </div>
        </div>
    </div>

</x-layout>