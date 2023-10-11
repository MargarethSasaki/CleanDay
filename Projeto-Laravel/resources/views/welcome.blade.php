<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/home.css">
    </head>
    <body>

   <!--NavBar-->

    <nav class="navbar">
        <ul>
            <li><a href="#" >CleanDay</a></li>
            <li><a href="/coleta">Coleta</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Materiais</a></li>  


            <!--Barra de pesquisa-->
            
            <form class="form">
              <button>
                  <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                      <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
              </button>
              <input class="input" placeholder="Pesquisar" required="" type="text">
              <button class="reset" type="reset">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
              </button>
          </form>
        </ul>
    </nav>

    <div class="texto">

      <ul class="horizontal-list">

        <li><img src="img/arvore2.JPG" alt=""></li>

        <li>
          <h1>Um projeto para salvar o mundo</h1>
          <button class="Btn">
            <svg class="svgIcon" viewBox="0 0 512 512" height="1.2em" text-stroke=""><path></path></svg>
            Clique para o Login
          </button>
          <h2><a href="#" class="cadastro">cadastre-se</a></h2>
        </li>

      </ul>
    
    </div>

    <div class="recicle">

      <ul class="reciclar">
        <!--<li><img src="img/recicle.JPG" alt="" class="imagem"></li>-->
        <li>
          <h1 class="reci">Recicle</h1>
          <p>
            Reciclar é uma ação fundamental para a preservação ambiental, pois reduz a poluição,
            conserva recursos naturais e diminui as emissões de gases de efeito estufa. Além disso, 
            a reciclagem estimula a economia, criando empregos e promovendo a conscientização sobre a 
            importância da sustentabilidade em nossa sociedade. Portanto, ao incorporar a reciclagem
            em nossa rotina,
            estamos contribuindo para um futuro mais verde e sustentável para as próximas gerações.
          </p>
        </li>
      </ul>
    </div>









    <!--Cards-->


<div class="materiais">



    <div class="card">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <img src="img/Eletronicos.jpg" alt=""></svg>
        <div class="card__content">
            <p class="card__title">Eletronicos</p>
            <p class="card__description">Lixo eletrônico, também conhecido como e-lixo ou resíduo eletrônico, refere-se a equipamentos eletrônicos descartados, obsoletos ou danificados, como computadores, celulares, tablets, televisores e outros dispositivos eletrônicos.</p>
            <button class="card__button">Clique</button>
            
        </div>
    </div>


    <div class="card">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="img/latinha.jpg" alt=""></svg>
    <div class="card__content">
        <p class="card__title">Latinhas</p>
        <p class="card__description">A "latinha" geralmente se refere a uma lata de alumínio, que é uma embalagem comum para bebidas e alimentos.</p>
        <button class="card__button">Clique</button>
        
    </div>
    </div>


    <div class="card">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="img/medicamentos.jpg" alt=""></svg>
    <div class="card__content">
        <p class="card__title">Medicamentos</p>
        <p class="card__description">Medicamentos que são considerados "lixos" geralmente se referem a medicamentos vencidos, não utilizados ou que foram descartados de maneira inadequada.</p>
        <button class="card__button">Clique</button> 
  
    </div>


    
    <h2> <a href="#"> <p> Clique aqui para mais materiais </p></a> </h2>

    </div>

</div>

    </body>
</html>
