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
              <a class="dropdown-item" href="index.php?op=2">Melhores edi????es</a>
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
        <span class="sr-only">Pr??ximo</span>
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
      <h1><strong>Edi????es mais recentes</strong></h1>
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

          <h1><strong>O que ?? o FIFA?</strong></h1>

          <!--quebra de linha-->
          <div class="row">
            <div class="col">&nbsp;</div>
          </div>
          <p>
            ???????????????FIFA, tamb??m conhecido como FIFA Football ou FIFA Soccer, ?? uma s??rie de videojogos de futebol,
            lan??ados anualmente pela Electronic Arts (EA) sobre a chancela EA Sports.
            Apesar de n??o haver grande concorr??ncia quando a EA lan??ou os primeiros t??tulos das s??ries Madden NFL e NHL,
            os jogos de futebol como Sensible Soccer, Kick Off e Match Day j?? estavam a ser produzidos desde os finais
            de 1980
            e j?? eram competitivos no mercado quando a EA anunciou um jogo de futebol em adi????o ?? marca EA Sports.
          </p>

          <p>
            ???????????????Desde FIFA 13, que o futebolista Lionel Messi ?? a face da s??rie, aparecendo em todas as capas do jogos,
            em a????es de promo????o e publicidade. Substituiu Wayne Rooney, que foi a face desde FIFA 06 at?? FIFA 12.
            Lionel Messi
            foi a capa da franquia at?? o ano de 2016.
          </p>

          <p>
            ???????????????O FIFA 17 foi lan??ado em Outubro de 2016,
            que incluiu pela segunda vez na s??rie futebol feminino, representado atrav??s de 12 equipas nacionais
          </p>

          <p>
            ???????????????O FIFA 18 foi lan??ado no dia 29 de Setembro de 2017 e contou com o astro portugu??s na capa, Cristiano
            Ronaldo,
            e ?? atualmente o jogo mais vendido da s??rie, com mais de 24 milh??es de c??pias vendidas.
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
                <p>??????????????? O jogo do ano passado merece grandes coisas por adicionar o primeiro modo de hist??ria do FIFA,
                  The Journey enquanto voc?? ajuda Alex Hunter a seguir seu sonho de se tornar um jogador de futebol
                  profissional.
                  E, al??m disso, tamb??m foi o primeiro jogo da FIFA a usar o monstruoso motor Frostbite da EA,
                  dando uma ??tima revis??o aos gr??ficos e ao desempenho do jogo.
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
                ???????????????O FIFA 14 trouxe ?? franquia FIFA para a ??ltima gera????o de consoles. O console atualizado permitiu
                algumas mudan??as esteticamente agrad??veis ??????para os f??s do FIFA, incluindo ambientes clim??ticos
                din??micos
                e anima????es de jogadores melhoradas. Foi o primeiro jogo a incluir os Legends do Ultimate Team e estilos
                de qu??mica.
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
                ???????????????FIFA 15 o primeiro game da s??rie a realmente aproveitar as capacidades dos consoles da nova
                gera????o.
                O jogo viu uma mudan??a fant??stica para anima????es e est??dios, melhorando a vis??o externa que inicialmente
                foi
                introduzido no 14. Foi tamb??m o primeiro que apresentou o acordo especial da EA Sports com a Premier
                League,
                incluindo rostos e est??dios de todas as 20 equipes da PL.
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
                    <p> ???????????????FIFA 22 ser?? lan??ado oficialmente pela Eletronic Arts (EA) no dia 27 de setembro (Edi????o
                        Ultimate)
                        e 1??
                        de
                        outubro (Edi????o Standard) trazendo algumas novidades para os f??s do simulador de futebol. Uma
                        delas ?? o
                        Modo
                        Carreira, que agora traz a op????o de ser um manager do time, criando uma equipe do zero. Al??m
                        disso, o
                        Ultimate Team premiar?? os jogadores com mais vit??rias seguidas.

                    </p>

                    <p>
                        ???????????????O jogo de futebol ser?? lan??ado para PlayStation 5 (PS5), PlayStation 4 (PS4), Xbox Series
                        X/Series
                        S,
                        Xbox
                        One, PC e Nintendo Switch. O game est?? dispon??vel em pr??-venda pelo pre??o de R$ 249 a R$ 338,90,
                        dependendo
                        da vers??o e da plataforma. Veja abaixo as principais mudan??as nos modos de jogo do FIFA 22.
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

                                <p>Uma das novidades do FIFA 22 ?? a possibilidade de voc?? ser o manager de um time no
                                    Modo Carreira,
                                    criando-o do zero, customizando uniformes, escudos e at?? o est??dio do seu clube.
                                    Al??m disso, o jogador
                                    poder?? escolher entre come??ar em uma liga de elite do futebol mundial ou se o clube
                                    ir?? iniciar sua
                                    trajet??ria em divis??es inferiores at?? alcan??ar a elite. Outro ponto ?? que agora os
                                    mosaicos nas arenas
                                    se formam sempre que um jogador se destaca no time. Uma segunda forma dele aparecer
                                    ?? se o atleta ficar
                                    por muito tempo no clube.
                                </p>
                                <p>
                                    No Modo Carreira para jogador, as novidades s??o os desafios de desempenho para serem
                                    completados ao
                                    longo das partidas e que servir??o para voc?? ganhar pontos de avalia????o com o
                                    treinador e companheiros de
                                    equipe.


                                </p>

                                <p>O sistema de desenvolvimento do jogador tamb??m ser?? reformulado com a implanta????o de
                                    uma ??rvore de
                                    habilidades, onde voc?? usar?? os pontos recebidos em treinos e jogos para aprimorar
                                    caracter??sticas de
                                    jogo. Al??m disso, o game trar?? um sistema de perks que poder??o ser utilizados ao
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


                                ???<p>O tradicional modo Ultimate Team tamb??m ter?? algumas mudan??as. A come??ar por um novo
                                    sistema de
                                    progress??o de temporada no Divison Rivals, com sequ??ncias de vit??rias,
                                    classifica????es e uma nova Divis??o
                                    de Elite.
                                </p>

                                <p>
                                    Na nova vers??o de FIFA, as Divis??es s??o compostas por fases e classifica????es. Se o
                                    jogador possuir uma
                                    sequ??ncia de vit??rias, progredir?? ainda mais r??pido. Tamb??m ser??o adicionados
                                    ???pontos de controle??? entre
                                    elas, o que salvar?? o progresso do jogador e o manter?? no n??vel certo de competi????o
                                    em caso de derrotas.
                                </p>

                                <p>
                                    As Divis??es ser??o reiniciadas ao final de cada temporada. A etapa em que o jogador
                                    terminar vai
                                    determinar onde ele iniciar?? a pr??xima season. Al??m disso, as recompensas ao final
                                    da temporada levar??o
                                    em conta as partidas jogadas, independente de vit??ria ou derrota. A customiza????o dos
                                    est??dios tamb??m
                                    ganhar?? novos elementos de edi????o na torcida como bandeiras, cartazes e faixas.
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
                                    A grande novidade do modo Pro Clubs no FIFA 22 ser?? a ???Partida Improvisada???, que
                                    permite que o
                                    jogador prepare um time com at?? quatro amigos ou players recentes antes de come??ar a
                                    busca por uma
                                    competi????o
                                </p>

                                <p>
                                    Com a mudan??a, ser?? poss??vel ganhar XP jogando com colegas de Clube, mas sem afetar
                                    o hist??rico.
                                    Al??m disso, ser?? poss??vel formar equipes com amigos de outros times sem precisar
                                    sair do seu Clube.
                                </p>

                                <p>
                                    O modo tamb??m contar?? com os Arqu??tipos, aumentos significativos de qualidades que
                                    ajudam o jogador
                                    a criar, personalizar e garantir a identidade de Craques Virtuais em campo. Os
                                    Arqu??tipos s??o
                                    adquiridos por Pontos de Habilidade ao final da ??rvore de habilidades.
                                </p>

                                <p>
                                    Na parte de personaliza????o, a desenvolvedora colocou caracter??sticas que podem ser
                                    modificadas como
                                    a cor do campo, m??sicas de gol e apelido do clube. Outro destaque ?? que agora a
                                    forma que o jogador
                                    monta o seu atleta n??o afeta o seu desempenho no campo. Isso significa que os
                                    usu??rios podem criar
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
                        Need for Speed ?? uma s??rie de jogos eletr??nicos de corrida autom??vel publicada pela Electronic
                        Arts (EA) e produzida por v??rios est??dios incluindo o canadiano EA Black Box, o brit??nico
                        Criterion Games e o sueco Ghost Games. ?? considerado por muitos cr??ticos e f??s de jogos de
                        corrida, como a melhor franquia de jogos de corrida de todos os tempos.

                    </p>

                    <p>O primeiro t??tulo, The Need for Speed foi lan??ado em 1994. Todos os jogos da s??rie consistem em
                        carros de corrida em v??rios circuitos fechados ou n??o. Alguns t??tulos incluem ainda persegui????es
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
                                <p>Battlefield??? 2042 marca o retorno ?? emblem??tica guerra total da franquia. Adapte-se a
                                    campos de batalha din??micos para super??-los com a ajuda do seu pelot??o e de um
                                    arsenal de ponta. Com capacidade para 128 pessoas*, prepare-se para uma escala sem
                                    precedentes em ambientes vastos. Encare experi??ncias massivas, de modos multiplayer
                                    atualizados, como Conquista e Ruptura, at?? o novo Battlefield??? Hazard Zone.
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
                                    Madden NFL 22 ?? o mais novo cap??tulo da franquia anual de futebol americano da EA!
                                    Com o monop??lio das licen??as de simuladores da liga desde 2004, a produtora colhe
                                    todos os ??nus e b??nus esperados pela falta de grandes rivais: apesar de suas boas
                                    vendas, h?? tempos que a s??rie se encontra estagnada e desprovida de grandes
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
                                    EA Sports UFC 4 ?? o jogo oficial do Ultimate Fighting Championship produzido pela
                                    Electronic Arts que traz lutas realistas baseadas no MMA. O game consegue captar com
                                    sucesso alguns elementos do MMA e apresent??-los com visuais bem convincentes, mas
                                    n??o alcan??a o mesmo n??vel em outras partes, como na luta no ch??o, que ?? grande parte
                                    do esporte. O elenco conta com uma grande quantidade de lutadores: 229 deles com 81
                                    varia????es. H?? tamb??m personagens por DLC, como o ic??nico ator e artista marcial
                                    Bruce Lee.
                                </p>

                                <p>
                                    O t??tulo, que teve seu lan??amento em agosto de 2020, est?? dispon??vel para comprar no
                                    PlayStation 4 (PS4) e Xbox One, e possui legendas em PT-BR. Confira, no review a
                                    seguir, todos os pr??s e contras de EA Sports UFC 4. Vale citar que a an??lise foi
                                    realizada na vers??o do jogo para PS4.
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