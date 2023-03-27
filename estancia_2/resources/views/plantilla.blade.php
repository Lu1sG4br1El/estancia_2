<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg" style="background-color: #EEEEEE">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('Nindex') ?'text-warning ':'' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com/" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu" aria-labelledby="dropdown09">
              <a class="nav-link {{ request()->routeIs('listaT.create') ?'text-warning ':'' }}" aria-current="page" href="{{ route('listaT.create') }}">Solicitar Taller</a>
              <a class="nav-link {{ request()->routeIs('NlistTaller') ?'text-warning ':'' }}" aria-current="page" href="listTaller">Lista de Talleres</a>
              <a class="nav-link {{ request()->routeIs('listaT.index') ?'text-warning ':'' }}" aria-current="page" href="{{ route('listaT.index') }}">Consultar Talleres</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('NDocCons') ?'text-warning ':'' }}" aria-current="page" href="/solDoc">Documentos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<body style="background-color:#FFFFFF">
@yield('contenido')
</body>
</html>