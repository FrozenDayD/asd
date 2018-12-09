<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">
      @auth
      {{ Auth::user()->firstname }}
        @else
          Cinema
      @endauth</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('/') ? 'active' : ''}}">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="{{Request::is('movies') ? 'active' : ''}}">
          <a class="nav-link" href="{{route('movies')}}">Movies</a>
          </li>
          
         
          @auth
          <li class="{{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="{{Request::is('logout') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('logout') }}">Log out</a>
          </li>
            @else    
            <li class="{{Request::is('login') ? 'active' : ''}}">
              <a class="nav-link" href="/login">Log in</a>
            </li>
            <li class="{{Request::is('register') ? 'active' : ''}}">
              <a class="nav-link" href="/register">Register</a>
            </li>
          @endauth
      </div>
    </nav>

