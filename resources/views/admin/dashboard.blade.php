<x-layout>
    {{-- <div class="container-fluid pt-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">Dashboard Amministratore</h1>
            </div>
        </div>
    </div> --}}

    @if(session('message'))
        <div class="alert alert-success text-center m-0 alertC">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="nomecognome text-center">Richieste per Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="Amministratore"/>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="nomecognome text-center">Richieste per Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="Revisore"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12">
                <h2 class="nomecognome text-center">Richieste per Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="Redattore"/>
            </div>
        </div>
    </div>

    <div class="hrC"></div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="nomecognome text-center">I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
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

    {{-- <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger text-white">Elimina</button>
    </form> --}}

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="nomecognome text-center">Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
            </div>
        </div>
    </div>

    {{-- <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
                <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btn btn-success text-white">Aggiungi</button>
                </form>
            </div>
        </div>
    </div> --}}

</x-layout>