<x-layout>

    {{-- <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">Accedi</h1>
            </div>
        </div>
    </div> --}}

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form class="p-5 card formloginC" method="POST" action=>
                @csrf
                    <h1 class="display-5 font-header">Accedi</h1>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">    
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">    
                </div>
                <div class="d-flex justify-content-center">

                    <button type="submit" class="btn btn-primary btn-login">Accedi</button>
                </div>
                <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a></p> 
            </form>
            </div>
        </div>
    </div>
</x-layout>