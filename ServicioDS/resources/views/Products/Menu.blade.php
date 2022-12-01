<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios De Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
     <link rel="shortcut icon" href="IMG/icono.ico" />
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
          <img src="IMG/logo.png" alt="SDS" width="60px">
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
<container>
  {{--* Division de Slider  --}}
<div class="container">
<div class="col">

</div>
<div class="col">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="IMG/2.png" class="d-block w95" alt="..." width="100%" height="350px">
                    <div class="carousel-caption d-none d-md-block">
                      <h2 class="text link-warning"><strong>Servicios entregados hasta tu casa</strong></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="IMG/3.jpg" class="d-block" alt="..." width="100%" height="350px">
                    <div class="carousel-caption d-none d-md-block">
                      <h2 class="text "><strong>Gran variedad de vinos y licores</strong></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="IMG/1.png" class="d-block" alt="..." width="100%" height="350px">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Para tus fiestas en casa</h5>
                    </div>
                  </div>
                </div>
                
              </div>
</div>
<div class="col">

</div>
</div>
<br>
{{--* Division de cartas  --}}
            <div class="container">
              <hr>
              <div class="row" id="items"></div>
            </div>

            <template id="template-card">
              <div class="col-12 mb-2 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                  <img src="" class="card-img-top">
                  <form action="{{route('products.Buys')}}" method="post">
                    @csrf
                   <div class="card-body">
                      <input type="hidden" name="Nombre" value="Nombre" ><h6 class="card-title"><strong>Titulo</strong></h6>
                      <p class="text-secondary">Descripcion</p>
                      <ul class="list-group list-group">
                        <input type="hidden" name="Precio" value="5"><span class=""><h4 class="text-success">$ <span class="precio">Precio</span></h4></span>
                        <span class="text-muted">Envio gratis</span>                      
                        
                          <label for="Cantidad">Cantidad</label>
                          <input type="number" max="9" name="Cantidad" value="0">
                          <br>
                          <button type="submit" class="btn btn-success">Comprar ahora</button></a>
                        </form>
                      </ul>
                        <br>
                        <button type="" class="btn btn-info" id="carrito"></button>
                     </div>
                     
                </div>
              </div>
            </template>
              
</container><br>

<footer class="bg-dark text-white">

      <div class="container">
        <footer class="row row-cols-lg-5 row-cols-sm-1 row-cols-sm-3 py-5 my-5 border-top align-items-end">
        <div class="col">
      
      </div>
          <div class="col">
            <a href="" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <svg class="bi me-2" width="0" height="32"><use xlink:href="#bootstrap"></use></svg>
              <img src="IMG/logo.png" alt="SDS" width="90px">
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
              <li class="nav-item mb-2"><a href=""  class = " nav-link p-0 text-muted"><img src="IMG/FOOTER/f.png" width="25px"></a></li>
              <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted"><img src="IMG/FOOTER/i.png" width="25px"></a></li>
            </ul>
          </div>
      
        </footer>
        <script src="app.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
  </body>
</html>