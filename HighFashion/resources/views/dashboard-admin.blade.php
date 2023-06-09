<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;" href="#"></a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="/"><h5>Home</h5></a>
                        </li>
                        
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="{{route('register')}}"><h5>Registrar</h5></a>
                        </li>
                        <li><h5>
                            <form method="POST" action="{{ route('logout') }}">
                             @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                 this.closest('form').submit();">
                            {{ __('Log Out') }}
                            </x-responsive-nav-link>
                            </form>
</h5>
                        </li>
                       
                        
                       
                        <li class="nav-item">
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;" href="#"></a>
                        </li>
                        <li class="nav-item me-5">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Tipo
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <button type="button" class="btn me-3 col-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                ADD Tipo
                                                    </button>
                                                </li>
                                                <li class="nav-item me-5">
                                                    <a class="nav-link" style="color:#5B5231;" href="/dashboard/type">Listar Tipo</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item me-5">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Coleção
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button type="button" class="btn me-3 col-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#duda">
                                                    ADD Coleção
                                                    </button>
                                                </li>
                                                <li>
                                                <a class="nav-link" style="color:#5B5231;" href="/dashboard/collection">Listar Coleções</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item me-5">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Produtos
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>  
                                                    <button type="button" class="btn me-3 col-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#ProductsModal">
                                                ADD Produto
                                                    </button>
                                                </li>
                                                <li>
                                                <a class="nav-link" style="color:#5B5231;" href="/dashboard/products">Listar Produtos</a>
                                                </li>              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="/help" target="_blank"><h5>Help</h5></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>


        
        
      


       

           
                
               

                
                    
               
         
        


     










        <!-- Modal -->
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar tipo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/dashboard/type" method="post">
                            @csrf
                            <div class="mb-3 g-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input class="form-control"  name="categories" id="exampleFormControlInput1" placeholder="Tipo">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="duda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar categoria</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="/dashboard/collection" method="post">
          @csrf
          <div class="mb-3 g-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input  class="form-control" id="exampleFormControlInput1"  name="description_collection" placeholder="Nome da categoria">
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-success">Salvar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    </div>


    <div>
        <!-- Button trigger modal -->
       

        <!-- Modal -->
        <div class="modal fade" id="ProductsModal" tabindex="-1" aria-labelledby="ProductsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ProductsModalLabel">Adicionar Produto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/dashboard/products" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 g-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input class="form-control" id="exampleFormControlInput1" name="code" placeholder="Insira o codigo do produto:" required>

                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input  class="form-control" id="exampleFormControlInput1" name="reference" placeholder="Digite a referência do produto" required>

                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input  class="form-control" id="exampleFormControlInput1" name="description" placeholder="Breve descrição do produto" required>

                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <select class="form-select" name="type_id" aria-label="Default select example">
                                <option selected>Selecione a coleção:</option>
                                @foreach($result as $key)
                                    <option value="{{$key->id}}">{{$key->categories}}</option>
                                @endforeach
                                </select>

                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <select class="form-select" name="collection_id" aria-label="Default select example">
                                <option selected>Selecione a coleção:</option>
                                @foreach($description as $key)
                                    <option value="{{$key->id}}">{{$key->description_collection}}</option>
                                @endforeach
                                </select>

                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input  class="form-control" id="exampleFormControlInput1" name="value" placeholder="Digite o valor" required>



                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" name="patch" id="formFile" required>


                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

  
</body>

</html>
