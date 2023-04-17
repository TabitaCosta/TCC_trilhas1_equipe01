<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }}">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="/" style="color:#5B5231;">
                    <img src="../assets/src/images/logo.png" alt="" width="70px" height="50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;"
                                href="#"></a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="#">Institucional</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link " style="color:#5B5231;" href="#">Sobre Nós</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="#">Artigos e dicas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:#5B5231;" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Coleções
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" style="color:#5B5231;" href="">Primavera</a></li>
                                <li><a class="dropdown-item" style="color:#5B5231;" href="/filterVerao">Verão</a></li>
                                <li><a class="dropdown-item" style="color:#968440;" href="#">Outono</a></li>
                                <li><a class="dropdown-item" style="color:#5B5231;" href="#">Inverno</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;"
                                href="#"></a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="{{ route('login') }}">Entrar</a>
                        </li>


                    </ul>
                    <form class="d-flex" action="/search" role="search" method="POST">
                        @csrf
                        <input class="form-control me-3 col-sm rounded-pill  border-opacity-2"
                            style="background-color:#d4ddb4; border-color: #5B5231;" type="search"
                            placeholder="Oque procura ?" aria-label="Search" name="busca" required>
                        <button class="btn btn-outline-success me-5 rounded-circle border-opacity-2" type="submit"><img
                                src="image-removebg-preview.png" width="15" height="15" alt=""></button>
                    </form>
                </div>
            </div>
        </nav>

<div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal-body">
                        <form action="{{url('/dashboard/type' . '/' . $result->id) }}" method="POST" >
                            @method('put')
                            @csrf
                            <div class="mb-3 g-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input class="form-control"  value="{{$result->categories}}" name="categories" id="exampleFormControlInput1" placeholder="Tipo" required>
                            </div>

                    </div>
                    <div class="modal-footer">
                      <a href= "/dashboard/type" class="btn btn-danger">Fechar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
           
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script> 
  </body>
</html>