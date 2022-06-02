<html>
    <head>
        <title>Projeto GET - Opção <?php if(isset($_GET['op'])){ echo $_GET['op']; } ?></title>
        <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    </head>
    <body>
        
    <div class="container">
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://www.netflix.com/br/">
              <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Netflix
            </a>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php" style="color: white">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php?op=1" style="color: white">O que é?</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                    Recomendações
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="index.php?op=2">Séries</a></li>
                    <li><a class="dropdown-item" href="index.php?op=3">Filmes</a></li>
                    <li><a class="dropdown-item" href="index.php?op=4">Filmes para Toda Família</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <?php if(isset($_GET['op'])){ ?>
            <?php if($_GET['op'] == 1){ ?>
                <div class="row">
          <div class="col">
            <img src="img/netflix.png" class="d-block w-100">
            <br>
            <h3>NETFLIX</h3>
            <h5>O que é?</h5>
            <br>
            <p style="text-align: justify;">
              A missão da Netflix é permitir que o acesso a filmes e programas de TV seja simples. Para isso, basta que
              o usuário faça um cadastro na plataforma e desfrute do serviço gratuitamente por 30 dias. Após o período
              de teste, o usuário pode se tornar assinante, ficando responsável por um pagamento mensal para ter acesso
              ilimitado aos títulos.
              Atualmente, a Netflix oferece filmes e séries por streaming e conta com cerca de 117 milhões de
              assinaturas ao redor do mundo.
            </p>
          </div>

          <div class="col">
            <h4 style="text-align: center;">Mais Sobre</h4>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne" style="background-color: #ff1c22; color: white;">
                    Netflix representa 12% do volume de tráfego na internet
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    O sucesso da empresa fez surgir a indústria de streaming e disparar a quantidade de dados
                    transmitidos na Internet globalmente. Segundo um levantamento da empresa de inteligência de rede
                    Sandvine, a Netflix foi responsável por cerca de 12% do todo o tráfego de download do planeta em
                    2019. Em março, no auge da quarentena pelo coronavírus, a Netflix registrou alta histórica no
                    tráfego. Como consequência, a plataforma foi obrigada a diminuir a qualidade da transmissão para
                    preservar a infraestrutura.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                    style="background-color: #979898; color: white;">
                    Está disponível em 190 países, mas com catálogos diferentes
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    A Netflix está disponível em 190 países e em centenas de línguas, mas cada um com um catálogo
                    distinto. A separação leva em conta diferentes acordos de licenciamento de conteúdo e suas
                    respectivas restrições geográficas. Os direitos de uma série comprados nos EUA, por exemplo, podem
                    não valer no Brasil. Como consequência, o título fica indisponível no catálogo nacional, mesmo que o
                    usuário clique no link e tente abrir no navegador.
                    Há anos alguns assinantes usam VPN para simular outras localizações e, assim, acessar bibliotecas de
                    outros países. O truque permite ter acesso a conteúdo que chegou apenas no exterior, mas viola os
                    termos de uso do serviço. Desde 2016, a Netflix bloqueia muitas VPNs e pode banir assinantes que
                    lançam mão do recurso.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="background-color: #ff1c22; color: white;">
                    Mais antiga do que o Google
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    Apesar de fazer sucesso mundial em tempos mais recentes, a Netflix é mais antiga do que o Google. A
                    empresa foi fundada em 1997, um ano antes que a gigante da tecnologia. Na época, porém, o serviço
                    ainda estava longe de se transformar em uma plataforma de streaming. Em vez disso, a companhia se
                    dedicava a alugar DVDs com entrega por correios.
                  </div>
                </div> 
              </div>
              <div class="col">
                &nbsp;
              </div>
              <div class="col">
                &nbsp;
              </div>
              <img src="img\net.png" height="45%" width="95%">
              <div class="col">
                &nbsp;
            </div>
          </div>  
        </div>
            <?php }elseif($_GET['op'] == 2){ ?>
                <div class="row">
          <div class="col">
            <img src="img/sueño.png" class="d-block w-100">
            <br>
            <h3>Um Sonho de Liberdade</h3>
            <h5>Não recomendado para menores de 16 anos</h5>
            <br>
            <p style="text-align: justify;">
              Em 1946, Andy Dufresne um jovem e bem sucedido banqueiro, tem a sua vida radicalmente modificada ao ser
              condenado por um crime que nunca cometeu, o homicídio de sua esposa e do amante dela. Ele é mandado para
              uma prisão que é o pesadelo de qualquer detento, a Penitenciária Estadual de Shawshank, no Maine. Lá ele
              irá cumprir a pena perpétua. Andy logo será apresentado a Warden Norton, o corrupto e cruel agente
              penitenciário, que usa a Bíblia como arma de controle e ao Capitão Byron Hadley que trata os internos como
              animais. Andy faz amizade com Ellis Boyd Redding, um prisioneiro que cumpre pena há 20 anos e controla o
              mercado negro da instituição.
            </p>
          </div>

          <div class="col">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne" style="background-color: #DECE96;">
                    Juntos Para Sempre
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    Essa comédia dramática apresenta a história de uma família com um peludo de quatro patas. A ligação
                    de um cão com a sua família se torna ainda maior depois que ele reencarna para acompanhar e proteger
                    a neta do seu antigo dono. Ethan e sua jovem neta CJ vivem com seu cachorro Bailey, em uma fazenda
                    do Michigan. Isso até o dia em que a neta acaba indo embora. Ethan deu a missão a esse cão de
                    proteger a neta em outras vidas. Um história comovente para quem ama pets.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\juntos.png" width="90%" style="margin-left: 5%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                    style="background-color: #ACE0B3;">
                    O Mistério do Farol
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    Mistério do Farol também é novo pelo catálogo da Netflix, mesmo sendo uma produção de 2018. Então se
                    você ainda não assistiu a esse drama britânico, vale dar uma conferida. O longa é inspirado em fatos
                    reais e se passa em uma ilha na costa da Escócia, com uma história intrigante, isso porque três
                    guardiões de farol desaparecem sem deixar rastros.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\misterio.png" width="90%" style="margin-left: 5%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="background-color: #D8D9D7;">
                    Imperdoável
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    Ruth volta ao convívio na sociedade, depois de cumprir pena por um crime violento, mas será difícil
                    voltar a conviver em meio as pessoas que não querem perdoar o que aconteceu. Vivendo mal em um lugar
                    onde já considerou o seu lar, a unica esperança é reencontrar a irmã que foi obrigada a deixar para
                    trás. Um drama que retrata a luta de uma ex-presidiária depois de cumprir 20 anos de pena que tenta
                    retomar a sua vida.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\imperdoavel.png" width="90%" style="margin-left: 5%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                &nbsp;
              </div>
              <div class="col">
                &nbsp;
              </div>
              <img src="img/sonho.png" height="30%" width="100%">
              <div class="col">
                &nbsp;
              </div>
            </div>
          </div>
        </div>
            <?php }elseif($_GET['op'] == 3){ ?>
                <div class="row">
          <div class="col">
            <img src="img/all.png" class="d-block w-100">
            <br>
            <h3>All of Us Are Dead</h3>
            <h5>Está no TOP 10 da Netflix Brasil.</h5>
            <br>
            <p style="text-align: justify;">
              Baseado no webtoon de sucesso chamado Now at Our School, a série All Of Us Are Dead narra a história de um
              grupo de alunos do ensino médio que precisam encarar uma situação de perigo extremo. A rotina da escola
              Hyosan seguia normal quando um vírus zumbi começa a se espalhar rapidamente. Os sobreviventes agora se
              encontram fadados a ficarem presos no perímetro da escola. Conforme as horas passam, fica mais difícil o
              acesso a comunicação com o mundo exterior, e o estoque de comida e armas começam a diminuir, o que
              consequentemente eleva o risco de cada um dos alunos remanescentes permanecerem seguros. Presos, eles
              buscam alguma saída enquanto precisam sobreviver à versões zumbis de seus professores e amigos que
              perderam ao longo do caminho. Enquanto isso, do lado de fora, as autoridades buscam maneiras de conter o
              avanço do vírus, ao mesmo tempo em que cientistas procuram entender a doença, como se comportam os humanos
              transformados em zumbis, para assim produzirem uma cura ou pelo menos desacelerar o contágio.
            </p>
          </div>

          <div class="col">
            <h4 style="text-align: center;">Populares da Netflix</h4>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne" style="background-color: #cccccc;">
                    The Witcher
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    Em The Witcher, série original da Netflix, Geralt de Rivia é um solitário caçador de monstros, que
                    luta para encontrar seu lugar num mundo onde pessoas são mais crueis que criaturas. Mas seu caminho
                    irá cruzar com duas figuras que mudarão sua vida: a feiticeira Yennefer de Vengerberg e a princesa
                    poderosa Cintran Ciri. A trama acompanha os três em linhas do tempo diferentes até que finalmente
                    suas vidas são conectadas quando se juntam na Batalha de Sodden Hill contra os invasores de
                    Nilfgaard.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\thewitcher.png" width="80%" style="margin-left: 10%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                    style="background-color: #ff8589;">
                    Stranger Things
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    Em Stranger Things, quando Will, um menino de 12 anos, desaparece misteriosamente, o xerife Jim
                    Hopper inicia uma operação para encontrá-lo. Enquanto isso, Mike, Dustin e Lucas, melhores amigos de
                    Will, decidem procurá-lo por conta própria. Mas as investigações acabam levando o grupo a
                    experimentos secretos do governo e a uma peculiar menina perdida na floresta.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\stranger.png" width="80%" style="margin-left: 10%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="background-color: #bdbbff;">
                    O Rei de Porcelana
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                    Em O Rei da Porcelana, a esposa do príncipe dá a luz a gêmeos, um menino e uma menina, mas isso é
                    considerado um mal sinal. A menina ia ser sacrificada, mas a mãe implora para que sua vida seja
                    poupada. E, em segredo, a filha é enviada para fora do palácio. Alguns anos depois, o menino, Lee
                    Hwi, acaba morrendo de uma doença terminal. A mãe esconde a morte do filho e traz novamente a menina
                    ao palácio para ser criada como menino no lugar do irmão. Ela se torna princípe, mas permanece com
                    medo que sua identidade um dia será descoberta.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\orei.png" width="80%" style="margin-left: 10%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                &nbsp;
              </div>
              <div class="col">
                &nbsp;
              </div>
              <img src="img\hyeok.png" height="35%" width="100%">
              <div class="col">
                &nbsp;
              </div>
            </div>
          </div>
        </div>
            <?php }else{ ?>
                <div class="row">
          <div class="col">
            <img src="img/abo.png" class="d-block w-100">
            <br>
            <h3>Abominável</h3>
            <h5>A partir do 6 anos</h5>
            <br>
            <p style="text-align: justify;">
                Shanghai, China. Yi é uma adolescente que, certo dia, descobre que um yeti está no telhado do prédio em
                que ela mora. A partir disso, ela e seus colegas passam a chamar a criatura mística de "Everest" e, ao
                criarem laços com o animal, decidem levá-lo até sua família, que está no topo do planeta. Porém, os três
                amigos terão que conseguir despistar o ganancioso Burnish e a zoóloga Dra. Zara, que querem pegar o yeti
                a qualquer custo.
            </p>
          </div>

          <div class="col">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne" style="background-color: #DECE96;">
                    Meu Malvado Favorito
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                      A pirâmide de Gizé foi roubada, sendo substituída por uma imensa réplica a gás. O feito é
                      considerado o roubo do século, o que mexe com o orgulho de Gru. Desejando realizar algo ainda mais
                      impressionante, ele planeja o roubo da Lua. Para tanto conta com a ajuda dos mínions, seres
                      amarelados que trabalham como seus ajudantes, e do dr. Nefario, um cientista. Só que para realizar
                      o roubo terá que tomar de Vetor, o ladrão da pirâmide, um raio que consegue diminuir o tamanho de
                      tudo que atinge. Sem conseguir invadir a fortaleza de Vetor, Gru encontra o plano perfeito quando vê as
                      três órfãs Margo, Agnes e Edith entrarem no local para vender biscoitos. Ele então vai ao orfanato
                      e resolve adotá-las. Só não esperava que, aos poucos, fosse se afeiçoar às irmãs.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\mmf.png" width="90%" style="margin-left: 5%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                    style="background-color: #ACE0B3;">
                    Hotel Transilvânia
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                      O Hotel Transilvânia é um resort cinco estrelas que serve de refúgio para que os monstros possam
                      descansar do árduo trabalho de perseguir e assustar os humanos. O local é comandado pelo Conde
                      Drácula, que resolve convidar os amigos para comemorar, ao longo de um fim de semana, o 118º
                      aniversário de sua filha Mavis. O que ele não esperava era que Jonathan, um humano sem noção,
                      fosse aparecer no local justo quando o hotel está repleto de convidados e, ainda por cima, se
                      apaixonasse por Mavis.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\hotel.png" width="90%" style="margin-left: 5%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="background-color: #D8D9D7;">
                    Tá Chovendo Hambúrguer
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align: justify;">
                      Em Tá Chovendo Hambúrguer, Flint Lockwood é um jovem cientista que sonha criar algo que faça com que
                      seja reconhecido pela população de Boca Grande, uma pequena ilha no Atlântico. Um dia ele consegue 
                      descobrir uma forma de transformar água em comida, só que precisa de bastante eletricidade para
                      colocá-la em funcionamento. Ao tentar usar a energia da geradora local, ele perde o controle da
                      invenção e ela ruma para o céu. Para piorar, a confusão que ele cria destroi um parque de
                      diversões, o grande trunfo do prefeito Shelbourne para melhorar a economia local. Flint acredita ter 
                      perdido a máquina, mas repentinamente começa a chover hambúrgueres em toda a cidade. Com o apoio de Sam
                      Sparks, uma estagiária de jornalismo que foi enviada à ilha para ser a nova "garota do tempo", Flint
                      logo vira uma celebridade local.
                    <div class="col">
                      &nbsp;
                    </div>
                    <img src="img\tachovendo.png" width="90%" style="margin-left: 5%;">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                &nbsp;
              </div>
              <div class="col">
                &nbsp;
              </div>
              <img src="img/abominavel.png" height="25%" width="100%">
              <div class="col">
                &nbsp;
              </div>
            </div>
          </div>
        </div>
            <?php } ?>
        <?php }else{ ?>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/netflix.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/netflix2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/outro.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <h3 style="text-align: center;">Na Netflix tem:</h3>
                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <figure class="figure">
                            <img src="img/achoqéyou.png" class="figure-img img-fluid rounded"
                                alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">Séries</figcaption>
                        </figure>
                    </div>

                    <div class="col" style="text-align: center;">
                        <figure class="figure">
                            <img src="img/anne.png" class="figure-img img-fluid rounded"
                                alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">Documentários</figcaption>
                        </figure>
                    </div>

                    <div class="col" style="text-align: right">
                        <figure class="figure">
                            <img src="img/masha.png" class="figure-img img-fluid rounded"
                                alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">Desenhos Animados</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row">

      <!--FOOTER-->
      <div class="col">
        <nav class="navbar navbar-light ml-auto" style="background-color: black;">
          <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt; color: white;">
            Netflix - Copyright 2022 - Todos os direitos reservados
          </a>
        </nav>
      </div>
      <!--FOOTER-->

    </div>
    </body>
</html>