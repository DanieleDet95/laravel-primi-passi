<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ Route('home') }}">
        <img class="logo" src="{{ asset('img/logo.png')}}" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li>
          <a href="{{ Route('home') }}">HOME</a>
        </li>
        <li>
          <a href="#">CORSO</a>
        </li>
        <li>
          <a href="#">DOPO IL CORSO</a>
        </li>
        <li>
          <a href="#">LEZIONE GRATUITA</a>
        </li>
        <li>
          <a href="#">ASSUMI I NOSTRI STUDENTI</a>
        </li>
      </ul>
      <button type="button" class="btn btn-lg btn-green">CANDIDATI ORA</button>
    </div>
  </nav>
</header>
