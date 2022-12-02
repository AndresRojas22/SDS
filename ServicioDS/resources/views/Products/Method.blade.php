<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios De Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .checkout-form label{
                font-size: 15px;
                font-weight: 700;
            }

            .checkout-form input{
                font-size: 18px;
                padding: 5px;
                font-weight: 400;
                text-transform: capitalize;
            }
        </style>
     <link rel="shortcut icon" href="/IMG/icono.ico" />
  </head>
  <body class="antialiased bg-light" style="display: flex;
  min-height: 100vh;
  flex-direction: column;">
  {{--* Division de Cabecera  --}}
  <header>
  {{--* Division de NAVBAR  --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
          <img src="/IMG/logo.png" alt="SDS" width="60px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bienvenido, {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">{{auth()->user()->name}}</a></li>
            <li><a class="dropdown-item" href="#">Mis pedidos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="javascript:document.getElementById('logout').submit()">Cerrar sesion</a></li>
            <form action="{{route('logout')}}" id="logout" style="display:none" method="post">
              @csrf
            </form>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('products.menu') }}">Productos </a>
          </li>
          
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="{{ route('products.Carrito') }}">Mi carrito</a>
        </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
    </nav>

  </header>
  <container class="table stripped-table">
    <div class="mt-4 offset-md-5">
        <h4 class="center-text">Metodo de pago</h4>
    </div>
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card-body">
                    <h5>Detalles</h5>
                    <hr>
                    <form action="{{route('products.PaymentC')}}">
                    <div class="row checkout-form">
                        <div class="col-md 6">
                            <label for="Nombre">Numero de tarjeta</label>
                            <input type = "number" name="Numero de tarjeta" id="Numero de tarjeta" placeholder="Numero de tarjeta" minlength="1" maxlength="16" required>
                        </div>
                        <div class="col-md 6">
                            <label for="Nombre">Nombre del cuenta habiente</label>
                            <input type="text" name="cuentahabiente" id="cuentahabiente" placeholder="Nombre" required pattern="[A-Za-z]+ [A-Za-z]+">
                        </div>
                    </div>
                    <div class="row checkout-form">
                        <div class="col-md 6">
                            <label for="Nombre">Fecha de expiracion</label>
                            <input type="month" name="Expiracion" id="Expiracion" required><br>
                        </div>
                        <div class="col-md 6">
                            <label for="Nombre">CCV</label>
                            <input type="text" class="form-control" placeholder="CCV" name="CCV" id="CCV">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary float-end">Pagar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
  </container>
<br><br><br>


    <footer class="bg-dark text-white">

        <div class="container">
          <footer class="row row-cols-lg-5 row-cols-sm-1 row-cols-sm-3 py-5 my-5 border-top align-items-end">
          <div class="col">
        
        </div>
            <div class="col">
              <a href="" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <svg class="bi me-2" width="0" height="32"><use xlink:href="#bootstrap"></use></svg>
                <img src="/IMG/logo.png" alt="SDS" width="90px">
              </a>
              <p class="text-muted">    SDS © 2022</p>
            </div>
        
          
        
            <div class="col">
              <h4><strong>{{auth()->user()->name}}</strong></h4>
              <ul class="nav flex-column">
                
                <li class="nav-item mb-2"><a href="javascript:document.getElementById('logout').submit()" class="nav-link p-0 text-muted">Cerrar Sesion</a></li>
                <li class="nav-item mb-2"><a href="{{ route('products.menu') }}" class="nav-link-active p-0 text-muted">Productos</a></li>
                <li class="nav-item mb-2"><a href="{{ route('products.Carrito') }}" class="nav-link p-0 text-muted">Mi carrito</a></li>
              </ul>
            </div>
        
            <div class="col">
              <h5><strong>Visitanos</strong></h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href=""  class = " nav-link p-0 text-muted"><img src="/IMG/FOOTER/f.png" width="25px"></a></li>
                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted"><img src="/IMG/FOOTER/i.png" width="25px"></a></li>
              </ul>
            </div>
        
          </footer>
          <script src="app.js"></script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      
    </body>
  </html>