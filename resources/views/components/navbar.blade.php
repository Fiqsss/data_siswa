<nav style="right: 0; left: 10rem;" class="navbar navbar-expand-lg bg-body-tertiary position-absolute ">
    <div class="container">
      <a class="navbar-brand" href="/">Latis Education</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Profile</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="/logout">
                @csrf
                <button class="nav-link active" aria-current="page" type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
