<x-layout>

    <div class="container-fluid text-center ">
        <div class="row justify-content-center">
            <div class="container">
                {{-- <h1 class="display-1 font-header">Lavora con noi</h1> --}}
            </div>
        </div>
    </div>

    <div class="container lavoraconnoi ">



        <div class="row justify-content-center align-items-center mt-5 text-center">
            
            <div class="col-12 col-md-6 ">
                <h2 class="lavori">Lavora come redattore</h2>
                <p>Se sei appassionato di cucina e vuoi condividere con tutti le tue idee, diventando redattore avrai la possibilità di inserire tutte le ricette che vuoi all'interno del sito, avrai una dashboard dedicata per apportare modifiche e aggiornare tutte le tue ricette.</p>
                <h2 class="lavori">Lavora come revisore</h2>
                <p>Il revisore ha il ruolo fondamentale di approvare o rifiutare ogni ricetta. Prima della pubblicazione potrà leggere le ricette e valutarne il contenuto.</p>
                <h2 class="lavori">Lavora come amministratore</h2>
                <p>L'amministratore ha la gestione generale del sito: potrà  gestire i ruoli e nominare nuovi redattore, revisori o anche amministratori.</p>
            </div>

        </div>    

<div class="hrC"></div>

<h2 class="nomecognome text-center pb-5 pt-4">Compila il form se vuoi essere dei nostri...</h2>

        <div class="row justify-content-center align-items-center pb-5">
        
            <form class="col-12 col-md-4 form-career " action="{{route('careers.submit')}}" method="POST">
                @csrf
                <div class="textC">
                    <label for="role" class="form-label textC textC2"> Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option class="textC" value="">Ruolo</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label textC mt-3 textC2">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label textC textC2">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                </div>
                
                <div class="mt-5 d-flex justify-content-end pb-5">
                    <button class="btn freccia freccia-big bg-primaryC">
                        <div>
                            <i class="fa-solid fa-arrow-right"></i>                      
                        </div>
                    </button>
                </div>


            </form>
        </div>

    </div>

</x-layout>