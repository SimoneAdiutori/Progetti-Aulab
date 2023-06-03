{{-- NAVBAR LOGIN --}}
<nav class="justify-content-end d-flex navbar1C">

  @auth

  <li class=" nav-item dropdown d-flex justify-content-md-end justify-content-center">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu dropdown-menu-end tendina-login2 ">

      @if(Auth::user() && Auth::user()->is_admin)
      <li class="">
        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
      </li>
      @endif

      @if(Auth::user() && Auth::user()->is_revisor)
      <li class="">
        <a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Dashboard Revisore</a>
      </li>
      @endif

      @if(Auth::user()->is_writer)
      <li class="">
        <a class="dropdown-item" href="{{ route('writer.dashboard') }}">Dashboard Redattore</a>
      </li>
      @endif

      @if(Auth::user() && Auth::user()->is_writer)
      <li class="">
        <a class="dropdown-item" href="{{ route('article.create') }}">Nuova ricetta</a>
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


{{-- NAVBAR ELEMENTI --}}
<nav class="navbar navbar-expand-lg navbar2C">

  
  <div class="container-fluid text-center ">

    {{-- LOGO --}}
    <a class="navbar-brand text-blackC p-2 rounded navbar-logoC" href="{{ route('homepage') }}"> 
      <i class="fa-regular fa-lemon h-logo"></i>
    </a>
    <button class="navbar-toggler tendina-login" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    {{-- LISTA ELEMENTI --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

        <li class="nav-item nav-itemC">
          <a class="nav-link fs-5 mx-3 @if(Route::currentRouteName()=='chisiamo') active @endif" aria-current="page" href="{{ route('chisiamo') }}">Chi siamo</a>
        </li>
        
        <li class="nav-item nav-itemC">
          <a class="nav-link fs-5 mx-3 @if(Route::currentRouteName()=='storia') active @endif" aria-current="page" href="{{ route('storia') }}">Storia</a>
        </li>
        
        <li class="nav-item nav-itemC">
          <a class="nav-link fs-5 mx-3 @if(Route::currentRouteName()=='article.index') active @endif" href="{{ route('article.index') }}">Tutte le ricette</a>
        </li>

        <li class="nav-item nav-itemC">
          <a class="nav-link fs-5 mx-3 @if(Route::currentRouteName()=='careers') active @endif" aria-current="page" href="{{ route('careers') }}">Lavora con noi</a>
        </li>


      </ul>
        
    </div>


  </div>

  <div class="separatore-navbar">

  </div>
</nav>