<nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/" style="color:#5B5231;">
                    High Fashion
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
                            placeholder="Oque procura ?" aria-label="Search" name="busca">
                        <button class="btn btn-outline-success me-5 rounded-circle border-opacity-2" type="submit"><img
                                src="image-removebg-preview.png" width="15" height="15" alt=""></button>
                    </form>
                </div>
            </div>
        </nav>

<div id="team-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="main-title">Outono 2023</h2>
            </div>
            @foreach($result as $key)
            <form action="filterVerao" method="post" enctype="multipart/form-data">
                        @csrf
            <div class="col-md-3">
                <div class="card border border-3 border border-success p-2 mb-2 border-opacity-25">

                <img src="{{Storage::url($key->patch)}}" alt="" class="card-img-top" style="padding: 15px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$key->code}}</h5>
                        <p class="card-text">R${{$key->value}}</p>
                    </div>
                </div>
            </div>


    </form>
