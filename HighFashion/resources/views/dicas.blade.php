<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigo e Dicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                            <a class="nav-link" style="color:#5B5231;" href="/"><h5>Home</h5></a>
                        </li>
                      
                       
                        <li class="nav-item me-5">
                            <a class="nav-link" style="color:#5B5231;" href="/dicas"><h5>Artigos e dicas</h5></a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link active me-5" aria-current="page" style="color:#5B5231;"
                                href="#"></a>
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

    <div class="container" style="padding:30px; backgroundcolor:#EDE0CE">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-decoration-underline" style="color:green">Artigos e Dicas</h1>
                <h3 style="color:green" class="text-center">As 6 dicas de moda feminina essenciais para arrasar.</h3>

                <h6 class="text-center">
                    Buscando por algumas dicas de moda feminina? Afinal, quem aí nunca passou bons e longos minutos na
                    frente do closet pensando em como montar um visual caprichado? Atualmente, este é um dos grandes
                    desafios da mulher moderna: aliar estilo e praticidade ao longo da semana.
                    Aliás, essa tarefa pode parecer ainda mais desafiadora quando somos, constantemente, surpreendidas
                    por inúmeras tendências!
                    Afinal, como conseguir obter uma produção sofisticada, adequada para certas ocasiões, que acompanhe
                    as novidades do momento e, de quebra, transmita a nossa personalidade? Até parece que estamos
                    falando de alguma “missão impossível”. Mas, muita calma nessa hora!
                    om alguns truques de styling e uma pitadinha de bom gosto é possível aliar todos esses fatores,
                    obtendo a sua melhor versão. É por isso que estamos aqui, fashionista! Hoje, te contaremos as
                    melhores dicas de moda feminina , seja para o escritório, um date ou uma festa com as amigas. Anote!
                </h6>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <img src="../assets/src/images/conheca.jp"
                    class="figure-img img-fluid rounded alt="">
          </div>
          <div class=" col-sm-8">
                <h1 class="text-center" style="padding: 30px; color: green;">1. Conheça o seu corpo</h1>
                <div class="text-center">
                    Antes de se jogar nas tendências do street style, que tal olhar para o que realmente importa no
                    que diz respeito às dicas de moda feminina 2022?
                    Nesse caso, estamos falando unicamente de você. Acredite se quiser, mas o autoconhecimento é uma
                    chave certeira na hora de criar uma produção e obter os melhores looks.
                    E esse pensamento se faz ainda mais necessário ao entendermos que cada pessoa possui um biotipo
                    diferente. Ou seja, nenhum corpo será 100% igual, sendo preciso compreender quais são os seus pontos
                    fracos e as suas principais necessidades.
                    Somente desse modo você terá facilidade ao escolher trajes capazes de valorizar as suas curvas,
                    evidenciando o que você tem de melhor e de uma forma natural.
                    Aliás, isso tudo pode ser feito de um jeito bem simples. Primeiramente, analise as suas medidas,
                    observando se você tem um quadril grande ou pequeno; se o seu busto é encorpado ou não, como também,
                    se as suas coxas são grossas ou mais finas.
                    A partir daí, você estará pronta para sair em busca de vestimentas bonitas, confortáveis e que caiam
                    “como uma luva” na combinação.
                    E mais! Após realizar essa imersão em suas características, também é válido conferir certos
                    segredinhos curingas para a criação de um visual. Veja algumas dicas de moda feminina para
                    diferentes biotipos:
                </div>
                <br>
                <br>
                <ul>
                    <li>As baixinhas podem usar sem medo os looks justos, capazes de evidenciar a silhueta</li>
                    <li>Caso esteja acima do peso, invista em peças que marquem bem a cintura ou que valorizem o seu
                        busto</li>
                    <li>Mulheres com o quadril largo devem utilizar acessórios ou blusinhas que chamem a atenção para a
                        parte superior do corpo </li>
                    <li>Se quiser camuflar a barriguinha, recorra aos tecidos mais grossos e estruturados. As modelagens
                        envelope ou transpassadas também são ótimas pedidas</li>
                    <li>O decote ciganinha é ideal para dar destaque aos ombros e levar mais charme para a região.</li>
                </ul>
            </div>
        </div>
    </div>

    <br>
    <br>



    <div class="container text-center">
        <div class="row">
            <div class="col-sm-8">

                <h2 class="text-center" style="padding: 30px; color: green;">2. Não esqueça dos acessórios</h2>

                <div class="text-center">
                    Claro que os acessórios não ficariam de fora das nossas dicas de moda feminina. Para criar produções
                    bem elaboradas e estilosas, nada melhor do que utilizar colares, brincos, anéis e demais elementos
                    prontos para transformar um look simples em algo elegante.
                    Aqui, é possível deixar a imaginação falar mais alto e brincar com o tamanho das joias, como também,
                    com os seus materiais.
                    Quer ver um exemplo? Se a proposta é montar uma composição discreta, vale incluir no outfit
                    elementos que sejam discretos, exatamente como aqueles fabricados em Prata de Lei ou Ouro Branco.
                    Em paralelo, e caso você faça parte do time das mulheres que amam ousar, tudo bem. Diante disso, os
                    brincos alongados, também conhecidos como maxi, e as clássicas gargantilhas possuem um papel
                    especial na combinação.
                    Versáteis e considerados como grandes aliados das fashionistas contemporâneas, essas joias ficam
                    belíssimas em um look, ainda mais, quando contam com a aplicação de pedras brilhantes e coloridas.
                    No quesito dicas de moda feminina para o dia a dia, há a possibilidade de utilizar produtos com
                    pedras variadas, como a Ágata, o Lápis Lazuli, o Quatzo Rosa, a Turmalina, a Ametista, as Zircônias
                    e por aí em diante.</br>
                    Phasellus bibendum aliquet erat, ut ornare purus malesuada etc.
                </div>
            </div>
            <div class="col">
                <img src="../assets/src/images/joias.jpg"
                    class="figure-img img-fluid rounded alt="">
            </div>
      </div>  
  </div>
     
  <br>
  <br>




  <div class=" container text-center">
                <div class="row">
                    <div class="col">
                        <img src="../assets/src/images/joias.jpg"
                            class="figure-img img-fluid rounded alt="">
      </div>
      <div class=" col-sm-8">
                        <h1 class="text-center" style="padding: 30px; color: green;">3. Combine cores e estampas</h1>
                        <div class="text-center">
                            Verdade seja dita: para ter praticidade, nada como contar com um closet recheado de peças
                            simples e
                            pautadas por tons neutros. Entretanto, quando queremos marcar presença e exalar
                            originalidade, são
                            as estampas e cores marcantes que nos ajudam a nos destacar.
                            Ainda hoje não é raro encontrar mulheres que adoram o uso de peças com diferentes
                            padronagens, mas
                            se sentem inseguras ao levá-las para o dia a dia.
                            Você é uma delas? Então, nessa lista de dicas de moda feminina também sugerimos aprender
                            como
                            coordenar corretamente as cores e estampas.
                            A princípio, pode até parecer difícil, mas com a prática, conseguimos realizar esse processo
                            naturalmente. Espia só as dicas de moda feminina que separamos:
                        </div>
                        <br>
                        <br>
                        <div class="text-start">
                            <li>Comece usando estampas discretas. O poá, o xadrez vichy e as listras finas são ótimas
                                para
                                as
                                marinheiras de primeira viagem;</li>
                            <li>Sempre tente coordenar uma estampa com alguma peça que apresente uma tonalidade em
                                comum.
                                Por
                                exemplo: se o fundo da padronagem é azul, adicione no look uma blusa, calça ou acessório
                                do
                                mesmo
                                tom;</li>
                            <li>Existe a possibilidade de montar um visual todo neutro e adicionar somente bolsas,
                                calçados
                                e outros
                                itens pontuais com estampas.<strong class="text-decoration-underline"> É um truque
                                    seguro e
                                    eficiente
                                    para evitar exageros;</strong></li>
                            <li><strong class="text-decoration-underline">Após se tornar experiente, considere misturar
                                    diferentes
                                    estampas.</strong> Poá com floral; listras com animal print e as formas geométricas
                                com
                                xadrez
                                são as nossas sugestões. </li>
                        </div>

                    </div>
                </div>
            </div>


            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-8">

                        <h2 class="text-center" style="padding: 30px; color: green;">4. Transforme looks com joias
                            curinga</h2>

                        <div class="text-start">
                            Dando continuidade ao nosso post com dicas de moda feminina, vamos abordar a importância das
                            roupas
                            atemporais. Sabe aquela peça que nunca sai de moda e que está sempre nos highlights
                            nacionais e
                            internacionais?
                            Pois bem, o seu closet merece contar com alguns desses trajes no dia a dia. Esse é o caso
                            das
                            vestimentas que conversam bem com todos os estilos, podendo ser levadas em inúmeras ocasiões
                            e, de
                            quebra, combinam com uma ampla variedade de looks.
                            No topo dessa lista de dicas de moda feminina para o dia a dia está a boa e velha calça
                            jeans,
                            especialmente as versões em modelagem reta ou skinny, que transitam bem no office ou fora
                            dele.
                            Em seguida, vem a camisa branca — um artigo “para todas as horas” e que, recentemente,
                            deixou de
                            fazer parte dos ambientes corporativos, surgindo também em visuais casuais e até no
                            beachwear.
                            Amou? Prepare-se: existem outras opções que tornarão o seu dia a dia fashion ainda mais
                            assertivo e
                            sofisticado. Nessa seleção, vale incluir:
                        </div>
                        <div class="text-start col-6">
                            <li>Camiseta básica ou com listras</li>
                            <li>Vestidinho preto, o clássico “little black dress”</li>
                            <li>Jaqueta de couro ou jeans</li>
                            <li>Blazer</li>
                            <li>Calça básica de alfaiataria</li>
                            <li>Tênis branco</li>
                        </div>
                    </div>

                    <div class="col">
                        <img src="../assets/src/images/joias.jpg"
                            class="figure-img img-fluid rounded alt="">
                    </div>
              </div>  
          </div>

           <br>
           <br>



                <div class=" container">
                        <div class="row">
                            <div class="col">
                                <h1 class="text-center text-decoration-underline" style="color:green">Dica bônus</h1>

                                <div class="text-center">
                                    Para reforçar as nossas dicas de moda feminina, lembre-se de apostar em modelos
                                    de roupas
                                    pautados por tons versáteis.
                                    Em outras palavras, aqueles que “vão bem com tudo”.
                                    <strong>O preto e o branco são os principais, mas, obviamente, você não precisa se
                                        limitar a
                                        essas
                                        alternativas.</strong>
                                    Fora elas, há o off-white, o cinza, o azul-marinho, o verde-musgo, o bordô e até as
                                    tonalidades
                                    terrosas.
                                    Experimente!
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>


                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                            <div class="col">
                                <div class="card" style="width: 14rem; margin-left:60px;">
                                    <img src="{{asset('storage/img/cadeira.avif')}}" class="card-img-top" alt="...">
                                    <span style="color:green">Moda</span>
                                    <span style="color:#000">03 de mar. de 2023</span>
                                    <div class="card-body">
                                        <h6 class="card-title">Oriba apresenta nova edição da coleção
                                            cápsula rePET</h6>
                                        <small class="card-text">Foto: cortesia Oriba
                                            A Oriba vem se comprometendo, cada vez mais... </small><br>
                                        <a href="https://fashionunited.com.br/news/fashion/oriba-apresenta-nova-edicao-da-colecao-capsula-repet-1679931095/20230327463352/"
                                            class="btn btn-success">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 14rem; margin-left:60px;">
                                    <img src="{{asset('storage/img/inverno.avif')}}" class="card-img-top" alt="...">
                                    <span style="color:green">Moda</span>
                                    <span style="color:#000">08 de mar. de 2023</span>
                                    <div class="card-body">
                                        <h6 class="card-title">Alexandre Herchcovitch lança Inverno 2023
                                            venda exclusiva </h6>
                                        <small class="card-text">Foto: cortesia Alexandre Herchcovitch
                                            Retornando como diretor
                                            criativo.</small><br>
                                        <a href="https://fashionunited.com.br/news/fashion/oriba-apresenta-nova-edicao-da-colecao-capsula-repet-1679931095/20230327463352/"
                                            class="btn btn-success">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 14rem; margin-left:60px;">
                                    <img src="../assets/src/images/joias.jpg}" class="card-img-top" alt="...">
                                    <span style="color:green">Moda</span>
                                    <span style="color:#000">10 de mar. de 2023</span>
                                    <div class="card-body">
                                        <h6 class="card-title">bazar com Shein e Fundação Laço Rosa </h6>
                                        <small class="card-text">O Parque Shopping Sulacap, no Rio de
                                            Janeiro, vai receber de 17
                                            a 19 de
                                            março a 4ª edição do Bazar...</small><br>
                                        <a href="https://fashionunited.com.br/news/fashion/parque-shopping-sulacap-faz-bazar-com-shein-e-fundacao-laco-rosa-1678912830/20230315462527/"
                                            class="btn btn-success">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 14rem; margin-left:60px;">
                                    <img src="../assets/src/images/joias.jpg}" class="card-img-top" alt="...">
                                    <span style="color:green">Moda</span>
                                    <span style="color:#000">10 de mar. de 2023</span>
                                    <div class="card-body">
                                        <h6 class="card-title">bazar com Shein e Fundação Laço Rosa </h6>
                                        <small class="card-text">O Parque Shopping Sulacap, no Rio de
                                            Janeiro, vai receber de 17
                                            a 19 de
                                            março a 4ª edição do Bazar...</small><br>
                                        <a href="https://fashionunited.com.br/news/fashion/parque-shopping-sulacap-faz-bazar-com-shein-e-fundacao-laco-rosa-1678912830/20230315462527/"
                                            class="btn btn-success">Saiba Mais</a>
                                    </div>
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