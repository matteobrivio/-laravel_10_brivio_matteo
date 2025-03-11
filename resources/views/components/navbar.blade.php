<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-center align-items-center text-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">login</a>
          </li>
          @endguest
          <li class="nav-item">
            @auth
            <a href="{{ route('auth.private') }}" class="nav-link " >Area privata</a>
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{$slot}}