<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>High Fashion</title>
    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body style="padding:0px">
    <div>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;" href="#"></a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="#inst">
                                <h5>Institucional</h5>
                            </a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link " style="color:#5B5231;" href="#sobre">
                                <h5>Sobre Nós</h5>
                            </a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="/dicas">
                                <h5>Artigos e dicas</h5>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:#5B5231;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Coleções</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" style="color:#5B5231;" href="/filter">Primavera</a></li>
                                <li><a class="dropdown-item" style="color:#5B5231;" href="/filter">Verão</a></li>
                                <li><a class="dropdown-item" style="color:#968440;" href="/filter">Outono</a></li>
                                <li><a class="dropdown-item" style="color:#5B5231;" href="/filter">Inverno</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;" href="#"></a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="{{ route('login') }}">
                                <h5>Login</h5>
                            </a>
                        </li>


                    </ul>
                    <form class="d-flex" action="/search" role="search" method="POST">
                        @csrf
                        <input class="form-control me-3 col-sm rounded-pill  border-opacity-2" style="background-color:#d4ddb4; border-color: #5B5231;" type="search" placeholder="Oque procura ?" aria-label="Search" name="busca" required>
                        <button class="btn btn-outline-success me-5 rounded-circle border-opacity-2" type="submit"><img src="../assets/src/images/lupa.png" width="15" height="15" alt=""></button>
                    </form>
                </div>
            </div>
        </nav>

    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/src/images/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/src/images/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/src/images/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    



    <div style="padding:20px;background-color:rgb(238, 247, 239);>

        <div class="container" >
            <div class="row">
                <h1  class="text-center">Os mais vendidos !!</h1>
                @foreach ($result as $key)
                <div class="col-md-3">


                    <img src="image-removebg-preview.png" alt="" class="card-img-top" style="padding: 15px;">
                    <div class="card-body shadow p-3 mb-5 bg-body rounded">
                        <img src="{{Storage::url($key->patch)}}" alt="" class="card-img-top" style="padding: 10px; ">
                        <div class="card-body">
                            <h5 class="card-title">{{$key->description}}</h5>
                            <p class="card-text">R${{$key->value}}</p>

                        </div>
                    </div>


                </div>
                @endforeach

            </div>

            {{ $result->links() }}

        </div>
    </div>


    <div id="sobre" style="background-color:#d4ddb4;">
        <div class="container text-center" style="padding:30px;">
            <div class="row">
                <h1 class="text-success text-center" style="font-family:'Lucida Sans';">Quem Somos
                    <div class="col">
                </h1>
                
                
                    <div class="justify-center" style="font-family:'Lucida Sans';padding:30px;">
                        Somos a High Fashion, empresa do ramo do vestuário feminino que tem a sua sede na cidade de São
                        João
                        Nepomuceno/MG e que está migrando para o mercado digital
                        para a expansão do negócio. Por esse motivo, este site foi criado para mostrá-los nossas roupas,
                        coleções, estilo e a nossa identidade.
                        Acreditamos que nosso modo de pensar o mundo pode impactar milhares de mulheres, e os nossos
                        produtos
                        irão ajudar.
                        Nossas roupas são confeccionadas e inspecionadas no mais alto padrão de qualidade, com tecidos
                        importados e mão-de-obra qualificada, criativa, inovadora e sustentável.
                        Viemos para disseminar a mudança que queremos no mundo!
                        
                        Estabelecida em São João Nepomuceno, 25/02/1972, a Empresa “High Fashion Confecções Ltda.” foi fundada por Gianni Givenchy e Yves Dior atuando principalmente na moda adulta feminina utilizando-se dos conceitos de criar roupas práticas, confortáveis e que trouxessem consigo uma beleza cotidiana.
                        Iniciando com poucas máquinas, mas com muitas e ideias e criatividade a Empresa  se destacou no mercado e consequente expandiu seu parque fabril agregando máquinas de última geração, automação de processos e utilização de softwares de design, criação e desenvolvimento.
                        No ano de 1994, Christian Vuitton (genro de Gianni) e Gabrielle Courrège (nora de Yves), entram para a Sociedade e dão continuidade à visão de crescimento da Empresa.
                        Já no ano 2000, a “High Fashion” começa a investir em Lojas próprias com uma coleção exclusiva direcionada à venda direta, sendo que em 2002 este segmento já respondia por 35% do faturamento da Empresa.
                        Em 2009, uma nova oportunidade surge no horizonte da Empresa, que passa a ter franquias de sua marca o que abre novos mercados para a Empresa.
                        Como última ação de marketing e agilidade dos processos, a “High Fashion” pretende lançar um site institucional, que além de apresentar a Empresa para o mundo, também trará artigos e dicas de moda, um canal de contato direto e uma funcionalidade de controle e gerenciamento de Fichas Técnicas o que será um grande apoio para a área comercial

                    </div>
                </div>

            </div>
        </div>
    </div>





            <div id="inst" style="background-color:rgb(238, 247, 239); padding:20px">



                <div class="container marketing text-center">

                
                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <div class="col-lg-4">

                            <img src="assets/src/images/m.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
                            <h2 class="fw-normal" style="font-family:'Lucida Sans'; color:rgb(51, 97, 56)">Missão</h2>
                            <p  style="font-family:'Lucida Sans'; color:rgb(51, 97, 56"> Ser uma empresa conhecida pela Qualidade, Consciência ambiental e por ajudar a todas as
                                mulheres a se
                                sentirem lindas vestindo nossos produtos.</p>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img src="assets/src/images/v.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">

                            <h2 class="fw-normal" style="font-family:'Lucida Sans'; color:rgb(51, 97, 56">Visão</h2>
                            <p style="font-family:'Lucida Sans'; color:rgb(51, 97, 56"> Nossa visão é aumentar nossos negócios tornando-se referência no mercado de Moda Feminina
                                Adulta,
                                tendo
                                uma participação ativa no crescimento da pegada ambiental e aumentando o impacto social
                                positivo.</p>

                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img src="assets/src/images/vv.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">

                            <h2 class="fw-normal" style="font-family:'Lucida Sans'; color:rgb(51, 97, 56">Valores</h2>
                            <p style="font-family:'Lucida Sans'; color:rgb(51, 97, 56"> 
                            Inovação<br>
                            Qualidade<br>
                            Planejamento<br>
                                Sustentabilidade<br>
                                Sinergia entre os colaboradores da empresa.</p>

                        </div><!-- /.col-lg-4 -->
                    </div>

                </div>
            </div>
  


            <!-- <div></div> -->



                <div class="container" >
                    <div class="row">
                        <div class="col-lg-6 col-sm-12" style="padding: 60px;">
                            <h1 style="font-family:'Lucida Sans'; color:#5B5231">Nossas Lojas</h1>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.6153806650846!2d-43.01601292375962!3d-21.522780189880308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa2926ff693c449%3A0xb15620c7671afbb!2sESCOLA%20SESI%20S%C3%83O%20JO%C3%83O%20NEPOMUCENO!5e0!3m2!1spt-BR!2sbr!4v1681335415183!5m2!1spt-BR!2sbr" style="border:0;width:100%;height:400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Nossas Outras Lojas
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nossas outras lojas:</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li><b>Minas Gerais</b></li>
                                        <li>Av. Barão do Rio Branco, 1235 – Juiz de Fora – CEP: 36125-080 – Telefone: (32)3211-3211;</li>
                                        <li> Av. Getúlio Vargas, 852 – Juiz de Fora – CEP: 36852-123  –   Telefone: (32)3235-5323;</li>
                                        <li>Av. Cel. Souza, 521 – Bicas – CEP:36600-000 – Telefone: (32)3271-1723;</li>
                                        <li>Av. Savassy, 1258 Loja 108 – CEP: 34256-754 – Telefone: (31)4325-6547;</li>
                                        <li> R. Cel. José Dutra, 128 – S. J. Nepomuceno – CEP: 36680-000   - Telefone: (32)3261-9874;</li>
                                        <li><b>Rio de Janeiro</b></li>
                                        <li>Av. Atlântica,   2546   –   Rio de Janeiro – CEP: 21258-456  -  Telefone: (21)2123-2321;</li>
                                        <li>Rua do Catete, 123 – Rio de Janeiro – CEP: 21123-321 – Telefone: (21)6932-7563;</li>
                                        <li>Av. Nossa Senha de Copacabana, 1874 – Rio de Janeiro CEP: 22587-632 –   Telefone: (21)3265-9632;</li>
                                        <li><b>São Paulo</b></li>
                                        <li>Rua da Graça, 456/202 – São Paulo – CEP: 11587-756 – Telefone: (11)1236-7410;</li>
                                        <li>Rua do Oriente, 857/104 – São Paulo – CEP: 12321-852 – Telefone: (11) 4256-9632.</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                        
                        <div class="col" style="padding: 30px;">
                            <h2 class="text-center" style="color:#5B5231"><strong>Fale Conosco</strong></h2>
                            <h4 class="text-center lead" style="color: #ABB194">Utilize o formulário abaixo para entrar em contato conosco.Caso preferir você pode falar através das nossas redes sociais.</h4>

                            <form action="/contact" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" style="color:#5B5231" class="form-label"><strong>Primeiro Nome</strong></label>
                                    <input name="name" type="text" style="border-color: #ABB194" class="form-control text-center" id="exampleFormControlInput1" placeholder="Digite seu Nome">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" style="color:#5B5231" class="form-label"><strong>Segundo Nome</strong></label>
                                    <input name="last_name" type="text" style="border-color: #ABB194" class="form-control text-center" id="exampleFormControlInput1" placeholder="Digite seu Nome">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" style="color:#5B5231" class="form-label"><strong>Assunto</strong></label>
                                    <input name="subject" type="text" style="border-color: #ABB194" class="form-control text-center" id="exampleFormControlInput1" placeholder="Digite seu Nome">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" style="color:#5B5231" class="form-label"><strong>Email</strong></label>
                                    <input name="email" type="email" style="border-color: #ABB194" class="form-control text-center" id="exampleFormControlInput1" placeholder="Digite seu Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" style="color:#5B5231" class="form-label "><strong>Digite sua Menssagem</strong></label>
                                    <textarea class="form-control text-center" name="message" style="border-color: #ABB194" id="exampleFormControlTextarea1" placeholder="Digite sua Menssagem" rows="3"></textarea>
                                </div>
                                <div class="text-center d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-success" >Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>


            <div>
                <div class="container">
                    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                        <div class="col-md-4 d-flex align-items-center">
                            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                                <svg class="bi" width="30" height="24">
                                    <use xlink:href="#bootstrap" />
                                </svg>
                            </a>
                            <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 High Fashion, Inc</span>
                        </div>

                        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                            <li class="ms-3">
                                <img src="../assets/src/images/instagram.png" width="30px" height="30px" alt="">
                            </li>
                            <li class="ms-3">
                                <img src="../assets/src/images/linkedin.png" width="30px" height="30px" alt="">
                            </li>
                            <li class="ms-3">
                                <img src="../assets/src/images/tiktok.png" width="30px" height="30px" alt="">          
                            </li>
                        </ul>
                    </footer>
                </div>
            </div>



            
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>