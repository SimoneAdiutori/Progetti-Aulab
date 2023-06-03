<x-layout>
    {{-- <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">Bentornato Revisore</h1>
            </div>
        </div>
    </div> --}}

    @if(session('message'))
        <div class="alert alert-warning text-center m-0">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="nomecognome text-center">Ricette da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="nomecognome text-center">Ricette pubblicate</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="nomecognome text-center">Ricette respinte</h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>

</x-layout>