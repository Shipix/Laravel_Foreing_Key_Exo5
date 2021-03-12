<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Volley</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('add-membre')) ? 'active' : '' }}" href="/add-membre">Add joueur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('add-team')) ? 'active' : '' }}" href="/add-team">Add team</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>