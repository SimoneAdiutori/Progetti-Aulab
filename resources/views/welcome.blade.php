<x-layout header="diNuovo">
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
</x-layout>