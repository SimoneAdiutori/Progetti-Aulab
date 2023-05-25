<x-layout>

    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <div class="container">
                <h1 class="display-1 font-header">Lavora con noi</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8 ">
                <h2>Lavora come amministratore</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit exercitationem impedit ipsa ullam, fugit non magni quibusdam. Pariatur reiciendis ad, aliquam obcaecati repudiandae deleniti officia error quos, quibusdam praesentium sint.</p>
                <h2>Lavora come revisore</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit exercitationem impedit ipsa ullam, fugit non magni quibusdam. Pariatur reiciendis ad, aliquam obcaecati repudiandae deleniti officia error quos, quibusdam praesentium sint.</p>
                <h2>Lavora come redattore</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit exercitationem impedit ipsa ullam, fugit non magni quibusdam. Pariatur reiciendis ad, aliquam obcaecati repudiandae deleniti officia error quos, quibusdam praesentium sint.</p>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <form class="col-12 col-md-8 " action="{{route('careers.submit')}}" method="POST">
                @csrf
                <div>
                    <label for="role" class="form-label">Per quale ruole ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">Scegli qui</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                </div>
                
                <div class="mt-2">
                    <button class="btn btn-info text-white">Invia la candidatura</button>
                </div>
            </form>
        </div>

    </div>

</x-layout>