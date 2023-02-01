<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users') }}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('articles') }}">See articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('article-create') }}">Create article</a>
        </li>
      </ul>
    </div>
  </div>
</nav>