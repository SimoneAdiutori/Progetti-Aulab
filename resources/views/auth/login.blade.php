<x-layout header="Accedi">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <form class="shadow p-5 card" method="POST" action=>
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">    
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">    
                </div>
                
                <button type="submit" class="btn btn-primary">Accedi</button>
                <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a></p> 
            </form>
            </div>
        </div>
    </div>
</x-layout>