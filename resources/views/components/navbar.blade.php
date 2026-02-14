<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand zen-dots-regular" href="#" >Marketplace Auto & Moto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("car-form") }}"> Inserisci Auto </a>
        </li>
        <a class="nav-link active css_home" aria-current="page" href="{{ route("cardCar") }}">Auto</a> 
        <li class="nav-item">
          </li>
        <a class="nav-link active css_home" aria-current="page" href="{{ route("motoCard") }}">Moto</a> 
        <li class="nav-item">
          <a class="nav-link" href="{{ route("moto-form") }}"> Inserisci Moto </a>
        </li>
      </ul>
    </div>
  </div>
</nav>