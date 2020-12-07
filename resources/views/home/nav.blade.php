<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">Home</a>
      <a class="navbar-brand" href="/post">Post</a>
      @if (session('role')=='admin')
        <a class="navbar-brand" href="/create">Create</a>
      @endif
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @if (session('token'))
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>