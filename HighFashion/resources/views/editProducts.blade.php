<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
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
                            <a class="nav-link" style="color:#5B5231;" href="/">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="{{route('register')}}">Registrar</a>
                        </li>
                        
                       
                        
                       
                        <li class="nav-item">
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;" href="#"></a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="/dashboard/type">Listar Tipo</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="/dashboard/collection">Listar Categoria</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="/dashboard/products">Listar Produtos</a>
                        </li>
                        </li>
                    </ul>
                    <form class="d-flex" action="/procura" role="search" method="POST">
                        @csrf
                        <input class="form-control me-3 col-sm rounded-pill  border-opacity-2"
                            style="background-color:#d4ddb4; border-color: #5B5231;" type="search"
                            placeholder="Oque procura ?" aria-label="Search" name="busca">
                        <button class="btn btn-outline-success me-5 rounded-circle border-opacity-2" type="submit"><img
                                src="image-removebg-preview.png" width="15" height="15" alt=""></button>
                    </form>
                </div>
            </div>
        </nav>


    <div class="container">

        <form action="{{url('/dashboard/products' . '/' . $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <label for="exampleFormControlInput1" class="form-label"></label>
            <select class="form-select" name="type_id" aria-label="Default select example">
                <option selected value="{{ $types->id }}">{{ $types->categories }}</option>
                @foreach ($result as $key)
                    <option value="{{ $key->id }}">{{ $key->categories }}</option>
                @endforeach
            </select>

            <label for="exampleFormControlInput1" class="form-label"></label>
            <select class="form-select" name="collection_id" aria-label="Default select example">
                <option selected value="{{ $collection->id }}">{{ $collection->description_collection }}</option>
                @foreach ($description as $key)
                    <option value="{{ $key->id }}">{{ $key->description_collection }}</option>
                @endforeach
            </select>




            <input class="form-control" id="exampleFormControlInput1" name="code" value="{{ $post->code }}"placeholder="Digite o valor" required>
            <label for="exampleFormControlInput1" class="form-label" required></label>
            <input class="form-control" id="exampleFormControlInput1" name="value" value="{{ $post->value }}"  placeholder="Digite o valor" required>
            <input class="form-control" id="exampleFormControlInput1" name="reference" value="{{ $post->reference }}" placeholder="Digite a referencia" required=
            <input class="form-control" id="exampleFormControlInput1" name="description"   value="{{ $post->description }}" placeholder="Digite a Descrição" required>
            <label for="formFile" class="form-label"></label>

            <input class="form-control" type="file" name="patch" id="formFile">
            <input type="hidden" value="{{ $post->patch }}" name="imagem" required>

            <div class="modal-footer">
                <a href= "/dashboard/products" class="btn btn-danger">Fechar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
   
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
