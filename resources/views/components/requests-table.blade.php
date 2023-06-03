<table class="table table-hover border tableC">
    <thead class="tableC">
      <tr>
        <th class="ashC" scope="col">#</th>
        <th class="nomeC" scope="col">Nome</th>
        <th class="emailC" scope="col">Email</th>
        <th class="azioniC text-center" scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach($roleRequests as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-center">
                @switch($role)
                  @case('Amministratore')
                    <a  href="{{route('admin.setAdmin' , compact('user'))}}" class="btn btn-success text-white">
                      <i class="fa-solid fa-arrow-right"></i>                      
                    </a>
                    @break
                  @case('Revisore')
                    <a  href="{{route('admin.setRevisor' , compact('user'))}}" class="btn btn-success text-white">
                      <i class="fa-solid fa-arrow-right"></i>                      
                    </a>
                    @break
                  @case('Redattore')
                    <a  href="{{route('admin.setWriter' , compact('user'))}}" class="btn btn-success text-white">
                      <i class="fa-solid fa-arrow-right"></i>                      
                    </a>
                    @break
                @endswitch
            </td>
        </tr>
      @endforeach
        
    </tbody>
  </table>