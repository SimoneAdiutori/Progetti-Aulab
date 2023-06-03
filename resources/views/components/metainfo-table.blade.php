<table class="table tableC table-hover border">
    <thead class="tableC">
      <tr>
        <th class="ashC" scope="col">#</th>
        <th class="nomeC" scope="col">Nome</th>
        <th class="ricetteC2" scope="col">Ricette</th>
        <th class="aggiornaC2" scope="col">Aggiorna</th>
        <th class="cancellaC2 text-center" scope="col">Cancella</th>
      </tr>
    </thead>
    <tbody class="">
      @foreach($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{ $metaInfo->id }}</th>
            <td>{{ $metaInfo->name }}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if($metaType == "tags")
            <td>
                <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome" class="form-control d-inline formCdash">
                    <button type="submit" class="btn  btnC2">Aggiorna</button>
                </form> 
            </td>
            <td>
                <form class="text-center" action="" method="">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-white"><i class="fa-solid fa-xmark"></i></button>
                </form> 
            </td>
            @else 
            <td>
                <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome" class="form-control formCdash d-inline">
                    <button type="submit" class="btn btnC2">Aggiorna</button>
                </form>
            </td>
            <td>
                <form class="text-center" action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-white"><i class="fa-solid fa-xmark"></i></button>
                </form>
            </td>
            @endif
        </tr>
      @endforeach
    </tbody>
  </table>