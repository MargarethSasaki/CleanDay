<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Materiais CleanDay</title>


  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <!-- Styles -->
  <link rel="stylesheet" href="/css/materiais.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Core theme JS-->
  <script src="/js/materiais.js" defer></script>
</head>


<body class="fundo-verde">

  <!--NavBar inicio-->
  <div class="header">
    <header class="p-3">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items- mb-2 mb-lg-0 text-white text-decoration-none ">
            <img src="img/logo.png" class="d-block w-100" height="50" width="50" alt="arvore1">
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2">CleanDay</a></li>
            <li><a href="/coleta" class="nav-link px-2">Coleta</a></li>
            <li><a href="/sobre" class="nav-link px-2">Sobre</a></li>
            <li><a href="/materiais" class="nav-link px-2">Materiais</a></li>
          </ul>
          <div class="text-end">
            <button type="button" class="btn btn-light me-2">
              <a href="/login">Login</a></button>
            <button type="button" class="btn btn-light">
              <a href="/register">Cadastro</a></button>
          </div>
        </div>
    </header>
    <div>
      <!--NavBar final-->

      <div class="noticias">

        <article class="carde">

          <div class="carde-tudo">
            <div class="temporaryy_text">
              <p>Como a produção de lixo pode afetar o meio ambiente e nosssas vidas?? Aqui estão algumas matérias sobre o tema:</p>
              <img src="img/fundo6.png" height="100%" width="100%" alt="tampa de garrafa">
            </div>
            <div class="carde_content">
              <span class="card_title">Tudo sobre reciclagem</span>
              <span class="carde_subtitle">https://www.cnnbrasil.com.br/tudo-sobre/reciclagem/</span>
              <p class="carde_description">A CNN Brasil produziu uma matéria que fala justamente sobre como a tecnologia vem mudando a maneira como reciclamos.</p>
              <button class="button"> <a href="https://www.cnnbrasil.com.br/tudo-sobre/reciclagem/" src=""> Clique</a></button>
  
            </div>
          </div>
        </article>


        <article class="carde">
          <div class="temporaryy_text">
            <p>Entenda o que é reaproveitamento de resíduos e quais são os métodos mais utilizados!</p>
            <img src="img/fundo6.png" height="100%" width="100%" alt="tampa de garrafa">
          </div>
          <div class="carde_content">
            <span class="carde_title">Desperdício de alimento</span>

            <p class="carde_description">O Brasil está entre os dez países que mais desperdiçam alimentos no mundo. Estima-se que cerca de 80 milhões de toneladas de resíduos sólidos sejam produzidos no país por ano, destes, 26 milhões correspondem ao desperdício de alimentos. .</p>
            <button class="button"> <a href="https://www.ejeq.com.br/reaproveitamento-de-residuos/" src=""> Clique</a></button>

          </div>
        </article>

      </div>



      <div class="materiais2">


        <div class="card" style="background-image:url('/img/materiais/plastico.jpg')">
          <div class="card-conteudo">
            <h3>Plástico</h3>
            <!-- <p>O plástico é o principal causador do acúmolo de lixo no mundo.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Plastico"> Saiba Mais
            </button>
          </div>
        </div>




        <div class="card" style="background-image:url('../img/materiais/papel.jpg')">
          <div class="card-conteudo">
            <h3>Papel</h3>
            <!-- <p>Reciclar papel ajuda a preservar florestas e economizar recursos naturais.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Papel"> Saiba Mais
            </button>
          </div>
        </div>




        <div class="card" style="background-image:url('../img/materiais/vidro.jpg')">
          <div class="card-conteudo">
            <h3>Vidro</h3>
            <!-- <p>Reciclar vidro economiza recursos e diminui a poluição do solo e da água.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Vidro"> Saiba Mais
            </button>
          </div>
        </div>



        <div class="card" style="background-image:url('../img/materiais/medicamentos.jpg')">
          <div class="card-conteudo">
            <h3>Lixo Hospitalar</h3>
            <!-- <p>O descarte adequado de resíduos hospitalares é importante.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Lixo hospitalar"> Saiba Mais
            </button>
          </div>
        </div>



        <div class="card" style="background-image:url('../img/materiais/oleo.avif')">
          <div class="card-conteudo">
            <h3>Óleo de Cozinha</h3>
            <!-- <p>Reciclar óleo de cozinha evita a contaminação do meio ambiente.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Oleo de cozinha"> Saiba Mais
            </button>
          </div>
        </div>


        <!--Outros cards-->


        <div class="card" style="background-image:url('../img/materiais/tecido.webp')">
          <div class="card-conteudo">
            <h3>Tecidos</h3>
            <!-- <p>Reciclar tecidos reduz o desperdício têxtil e a pressão sobre os recursos naturais.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Tecidos"> Saiba Mais
            </button>
          </div>
        </div>



        <div class="card" style="background-image:url('../img/materiais/pilha.jpg')">
          <div class="card-conteudo">
            <h3>Pilhas</h3>
            <!-- <p>Reciclar pilhas evita a liberação de substâncias tóxicas no ambiente.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Pilhas"> Saiba Mais
            </button>
          </div>
        </div>



        <div class="card" style="background-image:url('../img/materiais/madeira.jpg')">
          <div class="card-conteudo">
            <h3>Madeira</h3>
            <!-- <p>Reciclar madeira contribui para a gestão sustentável de florestas e reduz o desperdício.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Madeira">Saiba Mais
            </button>
          </div>
        </div>



        <div class="card" style="background-image:url('../img/materiais/sucata.jpg')">
          <div class="card-conteudo">
            <h3>Sucatas</h3>
            <!-- <p>A reciclagem de sucatas contribui para a economia de recursos e a redução do impacto ambiental.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Sucatas"> Saiba Mais
            </button>
          </div>
        </div>



        <div class="card" style="background-image:url('../img/materiais/eletronicos.jpg')">
          <div class="card-conteudo">
            <h3>Eletrônicos</h3>
            <!-- <p>A reciclagem de eletrônicos ajuda a recuperar materiais valiosos.</p> -->
          </div>
          <div class="centro">
            <button class="button-material" id="Eletronicos">
              Saiba Mais
            </button>
          </div>
        </div>

        <!-- PARTE DO POPUP -->
        <div id="meuPopup" class="popup">
          <div class="popup-conteudo">
            <div>
              <span class="fechar" id="fecharPopup">&times;</span>
              <h2 id="popup-titulo">Este é o meu popup</h2>
              <p id="popup-texto">Conteúdo do popup.</p>
            </div>
          </div>
        </div>

      </div>




    </div>

    <!--footer inicio-->

    <div class="footer">
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
          <title>Bootstrap</title>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </symbol>
      </svg>

      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-success"></p>

          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="/coleta" class="nav-link px-2 text-body-secondary">Coleta</a></li>
            <li class="nav-item"><a href="/sobre" class="nav-link px-2 text-body-secondary">Sobre</a></li>
            <li class="nav-item"><a href="/materiais" class="nav-link px-2 text-body-secondary">Materiais</a></li>

          </ul>
        </footer>
      </div>

      <div class="b-example-divider"></div>

      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
              <img src="img/logo.png" class="d-block w-100" height="24" width="30" alt="arvore1">
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 CleanDay, @Copyright</span>
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="https://twitter.com/CleanDay873244"><svg class="bi" width="24" height="24">
                  <use xlink:href="#twitter" />
                </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/cleandayrecicles/"><svg class="bi" width="24" height="24">
                  <use xlink:href="#instagram" />
                </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.facebook.com/people/CleanDay-Day/pfbid023MYHtEpw1t4nCPThyqoRvt6nPS3EbU1zDTM68y53t1JaVtCnWWWR6nKW7tW6VKc7l/"><svg class="bi" width="24" height="24">
                  <use xlink:href="#facebook" />
                </svg></a></li>
          </ul>
        </footer>
      </div>
    </div>
    <!--footer final-->






</body>