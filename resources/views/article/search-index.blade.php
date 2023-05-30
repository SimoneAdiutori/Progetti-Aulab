<x-layout>

    <div class="container-fluid p-5 text-center bg-info">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">Tutti gli articoli per: {{$query}}</h1>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row justify-content-center">
            @foreach($articles as $article)

            
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
                    </div>
                    <div class= "text-muted d-flex justify-content-center align-items-center text-center">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-warning mb-3"> Dettagli </a>
                    </div>
                </div>
                
            </div>
           @endforeach 
        </div>
    </div>



</x-layout>