<x-layout>

    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1">Carica il tuo prodotto</h1>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <form class="p-5 shadow" method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Categoria:</label>
                    <select class="form-control text-capitalize" name="category" id="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="7">{{ old('body') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>

                
                <button type="" class="btn btn-primary">Inserisci</button>
            </form>
            </div>
        </div>
    </div>

</x-layout>