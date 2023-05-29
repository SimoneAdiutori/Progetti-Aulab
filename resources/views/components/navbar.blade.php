
<nav class="justify-content-end d-flex navbar1C">

  @auth

  <li class=" nav-item dropdown d-flex justify-content-md-end justify-content-center ">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Ciao {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="#">Profilo</a></li>

      @if(Auth::user() && Auth::user()->is_admin)
      <li class="">
        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
      </li>
      @endif

      @if(Auth::user() && Auth::user()->is_revisor)
      <li class="">
        <a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
      </li>
      @endif

      @if(Auth::user() && Auth::user()->is_writer)
      <li class="">
        <a class="dropdown-item" href="{{ route('article.create') }}">Scrivi articolo</a>
      </li>
      @endif
      


      <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
      <form action=" {{ route('logout') }}" method="POST" class="d-none" id="form-logout">@csrf</form>
    </ul>
  </li>

  @else

  
      <li class="custom-puntino p-1"><a class="btn-nav" href="{{ route('login') }}">Accedi</a></li>
      <span> | </span>
      <li class="custom-puntino p-1"><a class="btn-nav" href="{{ route('register') }}">Registrati</a></li>

  @endauth



</nav>

<nav class="navbar navbar-expand-lg bg-whiteC navbar2C fixed">

  
  <div class="container-fluid text-center">

    <a class="navbar-brand text-blackC p-2 rounded" href="{{ route('homepage') }}"> 
      <i class="fa-solid fa-shop h-logo"> 
      </i> 
      <p class="logo-text"> Mercatini </p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

        {{-- <li class="nav-item">
          <a class="nav-link @if(Route::currentRouteName()=='article.create') active @endif" aria-current="page" href="{{ route('article.create') }}">Carica il tuo articolo</a>
        </li> --}}

        <li class="nav-item nav-itemC">
          <a class="nav-link fs-5 p-5 @if(Route::currentRouteName()=='careers') active @endif" aria-current="page" href="{{ route('careers') }}">Lavora con noi</a>
        </li>
        <span class="fs-1">  </span>

        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>

          @foreach ($categories as $category)
          <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="">{{$category->name}}</a></li>
          </ul>
          @endforeach
        </li> --}}
        <li class="nav-item nav-itemC">
          <a class="nav-link fs-5 p-5  @if(Route::currentRouteName()=='article.index') active @endif" href="{{ route('article.index') }}">Lista degli articoli</a>
        </li>


             
        
      {{-- </ul>
      @auth

      <li class=" nav-item dropdown d-flex justify-content-md-end justify-content-center ">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ciao {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Profilo</a></li>

          @if(Auth::user() && Auth::user()->is_admin)
          <li class="">
            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
          </li>
          @endif

          @if(Auth::user() && Auth::user()->is_revisor)
          <li class="">
            <a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
          </li>
          @endif

          @if(Auth::user() && Auth::user()->is_writer)
          <li class="">
            <a class="dropdown-item" href="{{ route('article.create') }}">Scrivi articolo</a>
          </li>
          @endif
          


          <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
          <form action=" {{ route('logout') }}" method="POST" class="d-none" id="form-logout">@csrf</form>
        </ul>
      </li>

      @else

      <li class="nav-item dropdown custom-puntino">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ciao Ospite
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
          <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
        </ul>
      </li>

      @endauth --}}
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}

    </div>
  </div>
</nav>