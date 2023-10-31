<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Materiais CleanDay</title>
  <!-- scripts -->
  <script src="/js/materiais.js" defer></script>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/materiais.css">
</head>

<body>

  <!--NavBar-->

  <nav class="navbar">
    <ul>
      <li><a href="/">CleanDay</a></li>
      <li><a href="/coleta">Coleta</a></li>
      <li><a href="/sobre">Sobre</a></li>
      <li><a href="/materiais">Materiais</a></li>


  </nav>

  <div class="noticias">
    <article class="carde">
 <div class="temporaryy_text">
        Como a produção de lixo pode afetar o meio ambiente e nosssas vidas?? Aqui estão algumas matérias sobre o tema:
      </div>


      <div class="carde_content"> 
       
        <span class="carde_title">Tudo sobre reciclagem</span>
       
        <span class="carde_subtitle">https://www.cnnbrasil.com.br/tudo-sobre/reciclagem/</span>
        <p class="carde_description">A CNN Brasil produziu uma matéria que fala justamente sobre como a tecnologia vem mudando a maneira como reciclamos.</p>
        <button class="button"> <a href="https://www.cnnbrasil.com.br/tudo-sobre/reciclagem/" src=""> Clique</a></button>

      </div>
    </article>


    <article class="carde">
      <div class="temporaryy_text">
        Entenda o que é reaproveitamento de resíduos e quais são os métodos mais utilizados!
      </div>
      <div class="carde_content">
        <span class="carde_title">Desperdício de alimento</span>

        <p class="carde_description">O Brasil está entre os dez países que mais desperdiçam alimentos no mundo. Estima-se que cerca de 80 milhões de toneladas de resíduos sólidos sejam produzidos no país por ano, destes, 26 milhões correspondem ao desperdício de alimentos. .</p>
        <button class="button"> <a href="https://www.ejeq.com.br/reaproveitamento-de-residuos/" src=""> Clique</a></button>

      </div>
    </article>

  </div>



  <div class="materiais2">

    <div class="card">
      <div class="card2">
        <h1>Plástico</h1>
        <p class="par">O plástico é o principal causador do acúmolo de lixo no mundo.</p>
        <button class="button cards-Materiais" id="Plastico"> Clique
        </button>
      </div>
    </div>


    <div class="card">
      <div class="card2">
        <h1>Papel</h1>
        <p class="par">Reciclar papel ajuda a preservar florestas e economizar recursos naturais.</p>
        <button class="button cards-Materiais" id="Papel"> Clique
        </button>
      </div>
    </div>


    <div class="card">
      <div class="card2">
        <h1>Vidro</h1>
        <p class="par">Reciclar vidro economiza recursos e diminui a poluição do solo e da água.</p>
        <button class="button cards-Materiais" id="Vidro"> Clique
        </button>
      </div>
    </div>

    <div class="card">
      <div class="card2">
        <h1>Lixo Hospitalar</h1>
        <p class="par">O descarte adequado de resíduos hospitalares é importante.</p>
        <button class="button cards-Materiais" id="Lixo hospitalar"> Clique
        </button>
      </div>
    </div>

    <div class="card">
      <div class="card2">
        <h1>Óleo de Cozinha</h1>
        <p class="par">Reciclar óleo de cozinha evita a contaminação do meio ambiente.</p>
        <button class="button cards-Materiais" id="Oleo de cozinha"> Clique
        </button>
      </div>
    </div>

    <!--Outros cards-->

    <div class="card">
      <div class="card2">
        <h1>Tecidos</h1>
        <p class="par">Reciclar tecidos reduz o desperdício têxtil e a pressão sobre os recursos naturais.</p>
        <button class="button cards-Materiais" id="Tecidos"> Clique
        </button>
      </div>
    </div>

    <div class="card">
      <div class="card2">
        <h1>Pilhas</h1>
        <p class="par">Reciclar pilhas evita a liberação de substâncias tóxicas no ambiente.</p>
        <button class="button cards-Materiais" id="Pilhas"> Clique
        </button>
      </div>
    </div>

    <div class="card">
      <div class="card2">
        <h1>Madeira</h1>
        <p class="par">Reciclar madeira contribui para a gestão sustentável de florestas e reduz o desperdício.</p>
        <button class="button cards-Materiais" id="Madeira">Clique
        </button>
      </div>
    </div>

    <div class="card">
      <div class="card2">
        <h1>Sucatas</h1>
        <p class="par">A reciclagem de sucatas contribui para a economia de recursos e a redução do impacto ambiental.</p>
        <button class="button cards-Materiais" id="Sucatas"> Clique
        </button>
      </div>
    </div>

    <div class="card">
      <div class="card2">
        <h1>Eletrônicos</h1>
        <p class="par">A reciclagem de eletrônicos ajuda a recuperar materiais valiosos e reduzir o descarte inadequado.</p>
        <button class="button cards-Materiais" id="Eletronicos">Clique
        </button>
      </div>
    </div>
    <!-- PARTE DO POPUP -->
    <div id="meuPopup" class="popup">
      <div class="popup-conteudo">
        <span class="fechar" id="fecharPopup">&times;</span>
        <h2 id="popup-titulo">Este é o meu popup</h2>
        <p id="popup-texto">Conteúdo do popup.</p>
      </div>
    </div>

  </div>




  </div>

<footer>
<h1 > &copy;CleanDay</h1>
</footer>


 </body>