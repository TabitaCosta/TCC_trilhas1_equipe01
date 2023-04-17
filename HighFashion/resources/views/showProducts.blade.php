<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }}">

    <title>High Fashion</title>
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
                            <a class="nav-link" style="color:#5B5231;" href="/dashboard"><h5>DASHBOARD</h5></a>
                        </li>
                      
                        
                    </ul>
                    <form class="d-flex" action="/procura" role="search" method="POST">
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

        
    

        <div class="row">
                <h1  class="text-center">Os mais vendidos !!</h1>
                @foreach ($result as $key)
                <div class="col-md-3">


                    <img src="image-removebg-preview.png" alt="" class="card-img-top" style="padding: 15px;">
                    <div class="card-body shadow p-3 mb-5 bg-body rounded">
                        <img src="{{Storage::url($key->patch)}}" alt="" class="card-img-top" style="padding: 10px; ">
                        <div class="card-body">
                            <h5 class="card-title">{{$key->description}}</h5>
                            <h5 class="card-text">R${{$key->value}}</h5>
                            <h5 class="card-title">{{$key->code}}</h5>
                            <div class="row">
                            <div class="col-lg-6 col-sm-12" role="group" aria-label="Second group">
                                <a href="{{url('/dashboard/products' . '/' . $key->id .'/edit') }}" class="btn btn-warning">Editar</a>
                            </div>
                            <div class="col-lg-6 col-sm-12" role="group" aria-label="Second group">       
                                <form  action="{{ url('/dashboard/products' . '/' . $key->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;Deseja realmente deletar?&quot;)">Deletar</button>
                                </form>
                            </div>
                        </div> 

                        </div>
                    </div>


                </div>
                @endforeach

            </div>

       
        {{ $result->links() }}
        
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
