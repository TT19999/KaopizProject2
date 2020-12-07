<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/post">Post</a>
        </li>
      </ul>
      <div class="col-sm-4">
        <form class="form-inline" method="POST">
          @csrf
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      
    </div> 
    @if (session('token'))
        <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" href="/logout">Log Out</a>
        </li>
      </ul>
    @else
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="/login">Log in</a>
      </li>
    </ul>
    @endif
  </nav>