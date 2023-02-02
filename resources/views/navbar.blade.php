<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        @if(Auth::user())
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users') }}">Users</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{ route('articles') }}">See articles</a>
        </li>
        @if(Auth::user())
                <li class="nav-item">
          <a class="nav-link" href="{{ route('article-create') }}">Create article</a>
        </li>
        @endif
        @if(!Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @else
         <li class="nav-item">
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
        </li>
        @endif

      </ul>
    </div>
  </div>
</nav>