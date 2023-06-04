<x-layout>

    

    <div class="container-fluid pt-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-3 show-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center">

                <div class="img-fluid d-flex justify-content-start flex-column">
                     <img class="img-show" src="{{ Storage::url($article->image) }}" alt="immagine di {{ $article->title }}">
                     <i class="fa-regular fa-clock clockC"></i>
                     <span class="price">{{ $article->price }}min</span>
                    </div>

            </div>
            <div class="col-12 col-md-8 ">

                <p class="text-start bodyC"> {{ $article->body }} </p>
                
                <div class="hrC"></div>
        
                <p class="text-center p-2 bodyC"> Creato il: {{ $article->created_at->format('d/m/Y') }} da <a href="{{route('article.byUser', ['user'=>$article->user->id])}}" class="text-center bodyC">{{$article->user->name}}</a> </p>


                <div class="row justify-content-center align-items-beetween">
                @if(Auth::user() && Auth::user()->is_revisor)
                    <a href="{{ route('revisor.acceptArticle', compact('article')) }}" class="btn btn-success text-white my-3 btnCrevisor"> <i class="fa-solid fa-check"></i> </a> 
                    <a href="{{ route('revisor.rejectArticle', compact('article')) }}" class="btn btn-danger text-white my-3 btnCrevisor"> <i class="fa-solid fa-xmark"></i> </a> 
                @endif  
                </div>   

                <div class="text-center mb-3">
                    <a href="{{ route('article.index') }}" class="btn btn-warning text-center freccia2"> 
                        <div>

                            <i class="fa-solid fa-arrow-left freccia1"></i>
                        </div>
                        
                     </a>
                </div>
                   

            </div>
        </div>
    </div>



</x-layout>