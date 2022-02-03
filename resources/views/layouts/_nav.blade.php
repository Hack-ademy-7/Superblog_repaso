<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Superblog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample04">
      <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{  route('login')  }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{  route('register')  }}">Register</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link text-white" href="{{  route('article.create')  }}">Nuevo artículo</a>
        </li> 
        @endauth
        <li class="nav-item">
          <a class="nav-link" href="{{  route('article.index')  }}">Todos los artículos</a>
        </li> 
        <form class="nav-link" action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="btn-link bg-transparent text-decoration-none border-0 text-white" type="submit">Logout</button>
        </form>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Auth</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown04">
            @auth
            <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
            @endauth
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form>
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>