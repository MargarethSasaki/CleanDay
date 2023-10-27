<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tela inicial CleanDay</title>

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
            <li><a href="/" >CleanDay</a></li>
            <li><a href="/coleta">Coleta</a></li>
            <li><a href="/sobre">Sobre</a></li>
            <li><a href="/materiais">Materiais</a></li>  
            

    </nav>

    <div class="texto">

      

        <div><img src="img/arvore2.JPG" alt=""></div>

        <div>
          
            <h1>Um projeto para salvar o mundo</h1>
            <a href="/login">
            <button class="Btn">
              <svg class="svgIcon" viewBox="0 0 512 512" height="1.2em" text-stroke=""><path></path></svg>
              Clique para o Login
            </button>
            </a>
            <h2><a href="/register" class="cadastro">cadastre-se</a></h2>
          
        </div>

      
    
    </div>

    <div class="recicle">

      <ul class="reciclar">
        <!--<li><img src="img/recicle.JPG" alt="" class="imagem"></li>-->
        <li>
          <h1 class="reci">Recicle</h1>
          <p >
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
            
            
        </div>
    </div>


    <div class="card">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="img/latinha.jpg" alt=""></svg>
    <div class="card__content">
        <p class="card__title">Latinhas</p>
        <p class="card__description">A "latinha" geralmente se refere a uma lata de alumínio, que é uma embalagem comum para bebidas e alimentos.</p>
       
        
    </div>
    </div>


    <div class="card">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><img src="img/medicamentos.jpg" alt=""></svg>
    <div class="card__content">
        <p class="card__title">Medicamentos</p>
        <p class="card__description">Medicamentos que são considerados "lixos" geralmente se referem a medicamentos vencidos, não utilizados ou que foram descartados de maneira inadequada.</p>
        
  
    </div>
    </div>
</div>



 <a href="/materiais" > <p class="MaisMat"> Clique aqui para mais materiais </p></a> 




    </body>
</html>