<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Est_2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<style>

</style>
<body style="background-color: #FFFAF0">
<nav class="navbar bg-body-tertiary fixed-top" style="background-color: #8B0000">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" style="background-color: dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Gabo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('Nindex') ?'text-warning ':'' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('NlistTaller') ?'text-warning ':'' }}" aria-current="page" href="listTaller">Lista de Talleres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('listaT.create') ?'text-warning ':'' }}" aria-current="page" href="{{ route('listaT.create') }}">Solicitar Taller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('listaT.index') ?'text-warning ':'' }}" aria-current="page" href="{{ route('listaT.index') }}">Consultar Talleres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('listaS.create') ?'text-warning ':'' }}" aria-current="page" href="{{ route('listaS.create') }}">Solicitar Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('listaS.index') ?'text-warning ':'' }}" aria-current="page" href="{{ route('listaS.index') }}">Consultar Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('NDocCons') ?'text-warning ':'' }}" aria-current="page" href="/solDoc">Documentos</a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
@yield('contenido')
</body>

</html>