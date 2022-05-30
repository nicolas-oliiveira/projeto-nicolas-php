<html>
    <head>
        <title>BootStrap <?php echo $_GET['op']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </head>
    <body background="_img/fundo2.jpg">
        <!--grid-->
  <div class="container">
    <div class="row">
    </div>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="_img/EASports.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong> FIFA </strong>
      </a>
    </nav>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Mais...
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index.php?op=2">Melhores edições</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?op=3">Novidades</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?op=4">Outros jogos</a>
            </div>
          </li>

          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?op=5">Fale conosco<span class="sr-only"></span></a>
            </li>
          </ul>
      </div>
    </nav>
                    <?php if(!isset($_GET['op'])) { ?>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="_img/Fifa14.jpg" width="800" height="400" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="_img/fifa15.jpg" width="800" height="400" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="_img/fifa17.jpg" width="800" height="400" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    <!--quebra de linha-->
    <div class="row">
      <div class="col">&nbsp;</div>
    </div>



    <!--quebra de linha-->
    <div class="row">
      <div class="col">&nbsp;</div>
    </div>



    <div style="text-align: center;">
      <h1><strong>Edições mais recentes</strong></h1>
    </div>

    <!--figuras-->

    <div class="row">
      <div class="col">
        <br>
        <figure class="figure">
          <img src="_img/fifa20.jpg" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">Capa do fifa 20</figcaption>
        </figure>
      </div>

      <div class="col">
        <br>
        <figure class="figure">
          <img src="_img/fifa21.jpg" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">Capa do fifa 21</figcaption>
        </figure>
      </div>

      <div class="col">
        <br>
        <figure class="figure">
          <img src="_img/fifa22.jpg" class="figure-img img-fluid rounded" alt="...">
          <figcaption class="figure-caption">Capa do fifa 22</figcaption>
        </figure>
      </div>
    </div>
  </div>
                <?php }else{ ?>
                <?php if($_GET['op'] == 2) { ?>
                        <!--quebra de linha-->
    <div class="row">
      <div class="col">&nbsp;</div>
    </div>




    <div class="row">
      <div class="col-sm">
        <img class="ad-block  w-100" src="_img/wpp.jpg">
        <div>

          <!--quebra de linha-->
          <div class="row">
            <div class="col">&nbsp;</div>
          </div>

          <h1><strong>O que é o FIFA?</strong></h1>

          <!--quebra de linha-->
          <div class="row">
            <div class="col">&nbsp;</div>
          </div>
          <p>
            ⠀⠀⠀⠀⠀FIFA, também conhecido como FIFA Football ou FIFA Soccer, é uma série de videojogos de futebol,
            lançados anualmente pela Electronic Arts (EA) sobre a chancela EA Sports.
            Apesar de não haver grande concorrência quando a EA lançou os primeiros títulos das séries Madden NFL e NHL,
            os jogos de futebol como Sensible Soccer, Kick Off e Match Day já estavam a ser produzidos desde os finais
            de 1980
            e já eram competitivos no mercado quando a EA anunciou um jogo de futebol em adição à marca EA Sports.
          </p>

          <p>
            ⠀⠀⠀⠀⠀Desde FIFA 13, que o futebolista Lionel Messi é a face da série, aparecendo em todas as capas do jogos,
            em ações de promoção e publicidade. Substituiu Wayne Rooney, que foi a face desde FIFA 06 até FIFA 12.
            Lionel Messi
            foi a capa da franquia até o ano de 2016.
          </p>

          <p>
            ⠀⠀⠀⠀⠀O FIFA 17 foi lançado em Outubro de 2016,
            que incluiu pela segunda vez na série futebol feminino, representado através de 12 equipas nacionais
          </p>

          <p>
            ⠀⠀⠀⠀⠀O FIFA 18 foi lançado no dia 29 de Setembro de 2017 e contou com o astro português na capa, Cristiano
            Ronaldo,
            e é atualmente o jogo mais vendido da série, com mais de 24 milhões de cópias vendidas.
          </p>
        </div>
      </div>

      <!--accordion-->
      <div class="col-sm">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <strong>FIFA 17</strong>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>⠀⠀⠀⠀⠀ O jogo do ano passado merece grandes coisas por adicionar o primeiro modo de história do FIFA,
                  The Journey enquanto você ajuda Alex Hunter a seguir seu sonho de se tornar um jogador de futebol
                  profissional.
                  E, além disso, também foi o primeiro jogo da FIFA a usar o monstruoso motor Frostbite da EA,
                  dando uma ótima revisão aos gráficos e ao desempenho do jogo.
                </p>
              </div>
            </div>
          </div>


          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <strong>FIFA 14</strong>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                ⠀⠀⠀⠀⠀O FIFA 14 trouxe à franquia FIFA para a última geração de consoles. O console atualizado permitiu
                algumas mudanças esteticamente agradáveis ​​para os fãs do FIFA, incluindo ambientes climáticos
                dinâmicos
                e animações de jogadores melhoradas. Foi o primeiro jogo a incluir os Legends do Ultimate Team e estilos
                de química.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong>FIFA 15</strong>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                ⠀⠀⠀⠀⠀FIFA 15 o primeiro game da série a realmente aproveitar as capacidades dos consoles da nova
                geração.
                O jogo viu uma mudança fantástica para animações e estádios, melhorando a visão externa que inicialmente
                foi
                introduzido no 14. Foi também o primeiro que apresentou o acordo especial da EA Sports com a Premier
                League,
                incluindo rostos e estádios de todas as 20 equipes da PL.
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
                <?php } else if($_GET['op'] == 3) { ?>
                  <!--quebra de linha-->
        <div class="row">
            <div class="col">&nbsp;</div>
        </div>




        <div class="row">
            <div class="col-sm">
                <img class="ad-block w-100" src="_img/fifinha.jpg">
                <div>

                    <!--quebra de linha-->
                    <div class="row">
                        <div class="col">&nbsp;</div>
                    </div>

                    <h1><strong>Novidades do Modo Carreira, Ultimate Teams e Pro Clubs</strong></h1>

                    <!--quebra de linha-->
                    <div class="row">
                        <div class="col">&nbsp;</div>
                    </div>
                    <p> ⠀⠀⠀⠀⠀FIFA 22 será lançado oficialmente pela Eletronic Arts (EA) no dia 27 de setembro (Edição
                        Ultimate)
                        e 1º
                        de
                        outubro (Edição Standard) trazendo algumas novidades para os fãs do simulador de futebol. Uma
                        delas é o
                        Modo
                        Carreira, que agora traz a opção de ser um manager do time, criando uma equipe do zero. Além
                        disso, o
                        Ultimate Team premiará os jogadores com mais vitórias seguidas.

                    </p>

                    <p>
                        ⠀⠀⠀⠀⠀O jogo de futebol será lançado para PlayStation 5 (PS5), PlayStation 4 (PS4), Xbox Series
                        X/Series
                        S,
                        Xbox
                        One, PC e Nintendo Switch. O game está disponível em pré-venda pelo preço de R$ 249 a R$ 338,90,
                        dependendo
                        da versão e da plataforma. Veja abaixo as principais mudanças nos modos de jogo do FIFA 22.
                    </p>
                </div>
            </div>

            <!--accordion-->
            <div class="col-sm">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Modo Carreira</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <img class="ad-block w-100" src="_img/md.carreira.jpg" style="text-align: center;">

                                <!--quebra de linha-->
                                <div class="row">
                                    <div class="col">&nbsp;</div>
                                </div>

                                <p>Uma das novidades do FIFA 22 é a possibilidade de você ser o manager de um time no
                                    Modo Carreira,
                                    criando-o do zero, customizando uniformes, escudos e até o estádio do seu clube.
                                    Além disso, o jogador
                                    poderá escolher entre começar em uma liga de elite do futebol mundial ou se o clube
                                    irá iniciar sua
                                    trajetória em divisões inferiores até alcançar a elite. Outro ponto é que agora os
                                    mosaicos nas arenas
                                    se formam sempre que um jogador se destaca no time. Uma segunda forma dele aparecer
                                    é se o atleta ficar
                                    por muito tempo no clube.
                                </p>
                                <p>
                                    No Modo Carreira para jogador, as novidades são os desafios de desempenho para serem
                                    completados ao
                                    longo das partidas e que servirão para você ganhar pontos de avaliação com o
                                    treinador e companheiros de
                                    equipe.


                                </p>

                                <p>O sistema de desenvolvimento do jogador também será reformulado com a implantação de
                                    uma árvore de
                                    habilidades, onde você usará os pontos recebidos em treinos e jogos para aprimorar
                                    características de
                                    jogo. Além disso, o game trará um sistema de perks que poderão ser utilizados ao
                                    decorrer da partida
                                    para melhorar o seu desempenho.
                                </p>


                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Ultimate Team</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <img class="ad-block w-100" src="_img/ultimate.jpg" style="text-align: center;">

                                <!--quebra de linha-->
                                <div class="row">
                                    <div class="col">&nbsp;</div>
                                </div>


                                ⠀<p>O tradicional modo Ultimate Team também terá algumas mudanças. A começar por um novo
                                    sistema de
                                    progressão de temporada no Divison Rivals, com sequências de vitórias,
                                    classificações e uma nova Divisão
                                    de Elite.
                                </p>

                                <p>
                                    Na nova versão de FIFA, as Divisões são compostas por fases e classificações. Se o
                                    jogador possuir uma
                                    sequência de vitórias, progredirá ainda mais rápido. Também serão adicionados
                                    “pontos de controle” entre
                                    elas, o que salvará o progresso do jogador e o manterá no nível certo de competição
                                    em caso de derrotas.
                                </p>

                                <p>
                                    As Divisões serão reiniciadas ao final de cada temporada. A etapa em que o jogador
                                    terminar vai
                                    determinar onde ele iniciará a próxima season. Além disso, as recompensas ao final
                                    da temporada levarão
                                    em conta as partidas jogadas, independente de vitória ou derrota. A customização dos
                                    estádios também
                                    ganhará novos elementos de edição na torcida como bandeiras, cartazes e faixas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Pro Clubs</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <img class="ad-block w-100" src="_img/pro clubs.jpg" style="text-align: center;">

                                <!--quebra de linha-->
                                <div class="row">
                                    <div class="col">&nbsp;</div>
                                </div>

                                <p>
                                    A grande novidade do modo Pro Clubs no FIFA 22 será a “Partida Improvisada”, que
                                    permite que o
                                    jogador prepare um time com até quatro amigos ou players recentes antes de começar a
                                    busca por uma
                                    competição
                                </p>

                                <p>
                                    Com a mudança, será possível ganhar XP jogando com colegas de Clube, mas sem afetar
                                    o histórico.
                                    Além disso, será possível formar equipes com amigos de outros times sem precisar
                                    sair do seu Clube.
                                </p>

                                <p>
                                    O modo também contará com os Arquétipos, aumentos significativos de qualidades que
                                    ajudam o jogador
                                    a criar, personalizar e garantir a identidade de Craques Virtuais em campo. Os
                                    Arquétipos são
                                    adquiridos por Pontos de Habilidade ao final da árvore de habilidades.
                                </p>

                                <p>
                                    Na parte de personalização, a desenvolvedora colocou características que podem ser
                                    modificadas como
                                    a cor do campo, músicas de gol e apelido do clube. Outro destaque é que agora a
                                    forma que o jogador
                                    monta o seu atleta não afeta o seu desempenho no campo. Isso significa que os
                                    usuários podem criar
                                    seus personagens sem se preocupar se isso afeta sua jogabilidade.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--quebra de linha-->
        <div class="row">
            <div class="col">&nbsp;</div>
        </div>
                <?php } else if($_GET['op'] == 4) { ?>
                  <!--quebra de linha-->
        <div class="row">
            <div class="col">&nbsp;</div>
        </div>




        <div class="row">
            <div class="col-sm">

                <div>

                    <!--quebra de linha-->
                    <div class="row">
                        <div class="col">&nbsp;</div>
                    </div>

                    <h1><strong>Outros jogos da EA Sports</strong></h1>

                    <!--quebra de linha-->
                    <div class="row">
                        <div class="col">&nbsp;</div>
                    </div>

                    <img class="ad-block w-100" src="_img/need.webp">

                    <!--quebra de linha-->
                    <div class="row">
                        <div class="col">&nbsp;</div>
                    </div>

                    <h2><strong>Need For Speed</strong></h2>

                    <!--quebra de linha-->
                    <div class="row">
                        <div class="col">&nbsp;</div>
                    </div>
                    <p>
                        Need for Speed é uma série de jogos eletrônicos de corrida automóvel publicada pela Electronic
                        Arts (EA) e produzida por vários estúdios incluindo o canadiano EA Black Box, o britânico
                        Criterion Games e o sueco Ghost Games. É considerado por muitos críticos e fãs de jogos de
                        corrida, como a melhor franquia de jogos de corrida de todos os tempos.

                    </p>

                    <p>O primeiro título, The Need for Speed foi lançado em 1994. Todos os jogos da série consistem em
                        carros de corrida em vários circuitos fechados ou não. Alguns títulos incluem ainda perseguições
                        policiais nas corridas.
                    </p>
                </div>
            </div>

            <!--accordion-->
            <div class="col-sm">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Battlefield</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <img class="ad-block w-100" src="_img/blat2042.jpg" style="text-align: center;">

                                <!--quebra de linha-->
                                <div class="row">
                                    <div class="col">&nbsp;</div>
                                </div>
                                <p>Battlefield™ 2042 marca o retorno à emblemática guerra total da franquia. Adapte-se a
                                    campos de batalha dinâmicos para superá-los com a ajuda do seu pelotão e de um
                                    arsenal de ponta. Com capacidade para 128 pessoas*, prepare-se para uma escala sem
                                    precedentes em ambientes vastos. Encare experiências massivas, de modos multiplayer
                                    atualizados, como Conquista e Ruptura, até o novo Battlefield™ Hazard Zone.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>NFL</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <img class="ad-block w-100" src="_img/nfl22.jpg" style="text-align: center;">

                                <!--quebra de linha-->
                                <div class="row">
                                    <div class="col">&nbsp;</div>
                                </div>
                                <p>
                                    Madden NFL 22 é o mais novo capítulo da franquia anual de futebol americano da EA!
                                    Com o monopólio das licenças de simuladores da liga desde 2004, a produtora colhe
                                    todos os ônus e bônus esperados pela falta de grandes rivais: apesar de suas boas
                                    vendas, há tempos que a série se encontra estagnada e desprovida de grandes
                                    melhorias, vivendo de pequenos passos por vez.</p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>UFC </strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <img class="ad-block w-100" src="_img/ufc-4.jpg" style="text-align: center;">

                                <!--quebra de linha-->
                                <div class="row">
                                    <div class="col">&nbsp;</div>
                                </div>

                                <p>
                                    EA Sports UFC 4 é o jogo oficial do Ultimate Fighting Championship produzido pela
                                    Electronic Arts que traz lutas realistas baseadas no MMA. O game consegue captar com
                                    sucesso alguns elementos do MMA e apresentá-los com visuais bem convincentes, mas
                                    não alcança o mesmo nível em outras partes, como na luta no chão, que é grande parte
                                    do esporte. O elenco conta com uma grande quantidade de lutadores: 229 deles com 81
                                    variações. Há também personagens por DLC, como o icônico ator e artista marcial
                                    Bruce Lee.
                                </p>

                                <p>
                                    O título, que teve seu lançamento em agosto de 2020, está disponível para comprar no
                                    PlayStation 4 (PS4) e Xbox One, e possui legendas em PT-BR. Confira, no review a
                                    seguir, todos os prós e contras de EA Sports UFC 4. Vale citar que a análise foi
                                    realizada na versão do jogo para PS4.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--quebra de linha-->
        <div class="row">
            <div class="col">&nbsp;</div>
        </div>
            <?php } ?>  
            <?php } ?>  
            
    </body>
 </html>