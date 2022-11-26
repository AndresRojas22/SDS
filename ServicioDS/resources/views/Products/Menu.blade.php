<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
  </head>
  <body class="antialiased bg-light" style="display: flex;
  min-height: 100vh;
  flex-direction: column;">
  <header>

<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
          <img src="" alt="SDS" width="60px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bienvenido {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">{{auth()->user()->name}}</a></li>
            <li><a class="dropdown-item" href="#">Mis pedidos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">Crear cuenta</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}" id="logout">Cerrar sesion</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link active" href="">Productos </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="">Ofertas</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="">Mi carrito</a>
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="IMG/2.png" class="d-block w-100" alt="..." width="560px" height="580px">
                    <div class="carousel-caption d-none d-md-block">
                      <h2 class="text link-warning"><strong>Servicios entregados hasta tu casa</strong></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="IMG/3.jpg" class="d-block w-100" alt="..." width="1980px" height="580px">
                    <div class="carousel-caption d-none d-md-block">
                      <h2 class="text "><strong>Gran variedad de vinos y licores</strong></h2>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="IMG/1.png" class="d-block w-100" alt="..." width="1980px" height="580px">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Para tus fiestas en casa</h5>
                    </div>
                  </div>
                </div>
                
              </div>
                <br><br>
{{--* Division de cartas  --}}
            <div class="container-fluid">
            <div class="row">
              <div class="col-1">

              </div>
              <div class=" row col-10">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                    <ul class="list-group list-group-flush">
                     <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                 <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                </ul>
                    <div class="card-body">
                 <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                 <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                       </ul>
                    <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                 <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                       </ul>
                    <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>
              
              </div>
            </div>
              <div class="col-1">

              </div>
                <br>
                <div class="row">
              <div class="col-1">

              </div>
              <div class=" row col-10">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                    <ul class="list-group list-group-flush">
                     <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                 <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                </ul>
                    <div class="card-body">
                 <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                 <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                       </ul>
                    <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                 <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                       </ul>
                    <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>
              
              </div>
            </div>
              <div class="col-1">

              </div>
                <br>
                <div class="row">
              <div class="col-1">

              </div>
              <div class=" row col-10">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                    <ul class="list-group list-group-flush">
                     <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                 <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                </ul>
                    <div class="card-body">
                 <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                 <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                       </ul>
                    <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card text-bg-light" style="width: 18rem;">
                 <img src="IMG/CARDS/c1.png" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                       </ul>
                    <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
                </div>
                </div>
              
              </div>
            </div>
              <div class="col-1">

              </div>
                <br>
            </div>
              
</container>

<footer class="bg-dark text-white">
      <div class="container">
        <footer class="row row-cols-5 py-5 my-5 border-top align-items-end">
          <div class="col">
            <a href="" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <img src="img/clash royale.png">
            </a>
            <p class="text-muted">SDS © 2022</p>
          </div>
      
          <div class="col">
      
          </div>
      
          <div class="col">
            <h5>Te puede interesar</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="" class="nav-link-active p-0 text-muted">Principal</a></li>
              <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Productos</a></li>
              <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Ofertas</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h5>Nuestras redes</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href=""  class = " nav-link p-0 text-muted"><img src="IMG/FOOTER/f.png" width="25px"></a></li>
              <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted"><img src="IMG/FOOTER/i.png" width="25px"></a></li>
            </ul>
          </div>
      
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>