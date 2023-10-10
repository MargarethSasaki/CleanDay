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
        <style>

            /* Estilos para telas menores (até 768px de largura) */
@media screen and (max-width: 768px) {
    .navbar ul {
        flex-direction: column; /* Exibir itens da lista em coluna */
        text-align: center; /* Centralizar texto */
    }

    .navbar li {
        margin: 10px 0; /* Espaçamento vertical entre os itens */
    }
}


/* Reset de estilos padrão do navegador */
body, ul {
    margin: 0;
    padding: 0;
    
}

/* Estilizando a navbar */
.navbar {
    background-color: #2F8240; /* Cor de fundo da navbar */
    width: 100%
}

.navbar ul {
    list-style: none; /* Remover marcadores de lista */
    display: flex; /* Exibir os itens da lista em linha */
    justify-content: left; /* Colocar itens na direita  horizontalmente */
    padding: 20px 0; /* Espaçamento interno superior e inferior */
    font-family: 'All the Way to the Sun', sans-serif;
    font-size: 20px;
    
                                                
}

.navbar li {
    margin: 0 60px; /* Espaçamento horizontal entre os itens da lista */
}

.navbar a {
    text-decoration: none; /* Remover sublinhado dos links */
    color: #12FF46; /* Cor do texto dos links */
    font-weight: bold; /* Estilo de fonte negrito */
}

body{
    background-color: #011E11;
    width:100%
}

/* Removendo estilos padrão do botão */
.form button {
    border: none; /* Remove a borda do botão */
    background: none; /* Remove o fundo do botão */
    color: #8b8ba7; /* Define a cor do texto do botão como um tom de cinza */
  }


  
  /* Estilizando o contêiner de entrada */
  .form {
    --timing: 0.3s; /* Define uma variável para o tempo de transição */
    --width-of-input: 550px; /* Define a largura do contêiner de entrada */
    --height-of-input: 30px; /* Define a altura do contêiner de entrada */
    --border-height: 2px; /* Define a altura da borda animada */
    --input-bg: #fff; /* Define a cor de fundo padrão como branco */
    --border-color: #2f2ee9; /* Define a cor da borda */
    --border-radius: 30px; /* Define o raio da borda do contêiner */
    --after-border-radius: 1px; /* Define o raio da borda após a animação */
    position: relative; /* Define a posição como relativa para o posicionamento do pseudo-elemento */
    width: var(--width-of-input); /* Define a largura do contêiner */
    height: var(--height-of-input); /* Define a altura do contêiner */
    display: flex; /* Exibe os elementos filhos em linha */
    align-items: center; /* Alinha os elementos verticalmente */
    padding-inline: 0.8em; /* Adiciona espaço interno horizontal */
    border-radius: var(--border-radius); /* Define o raio da borda do contêiner */
    transition: border-radius 0.5s ease; /* Adiciona uma animação de transição suave para a mudança do raio da borda */
    background: var(--input-bg, #fff); /* Define a cor de fundo do contêiner */
    width: 50%
    
  }
  
  /* Estilizando o campo de entrada de texto */
  .input {
    font-size: 0.9rem; /* Define o tamanho da fonte */
    background-color: transparent; /* Torna o fundo do campo de entrada transparente */
    width: 100%; /* Define a largura como 100% */
    height: 100%; /* Define a altura como 100% */
    padding-inline: 0.5em; /* Adiciona espaço interno horizontal ao campo de entrada */
    padding-block: 0.7em; /* Adiciona espaço interno vertical ao campo de entrada */
    border: none; /* Remove a borda do campo de entrada */
  }
  




  /* Estilizando a borda animada */
  .form:before {
    content: ""; /* Adiciona conteúdo antes do contêiner */
    position: absolute; /* Define a posição como absoluta para posicionamento */
    background: var(--border-color); /* Define a cor de fundo da borda */
    transform: scaleX(0); /* Inicialmente, a largura da borda é zero, tornando-a invisível */
    transform-origin: center; /* Define o ponto de origem da transformação no centro */
    width: 100%; /* Define a largura como 100% */
    height: var(--border-height); /* Define a altura da borda */
    left: 0; /* Alinha a borda à esquerda */
    bottom: 0; /* Alinha a borda na parte inferior */
    border-radius: 1px; /* Define o raio da borda da linha */
    transition: transform var(--timing) ease; /* Adiciona uma animação de transição para a transformação da borda */
  }


  
  /* Estilizando o contêiner de entrada quando está em foco */
  .form:focus-within {
    border-radius: var(--after-border-radius); /* Muda o raio da borda após a animação quando o contêiner está em foco */
  }
  


  /* Removendo o contorno padrão do campo de entrada em foco */
  input:focus {
    outline: none; /* Remove o contorno padrão do campo de entrada em foco */
  }


  
  /* Animação da borda quando o contêiner de entrada está em foco */
  .form:focus-within:before {
    transform: scale(1); /* Aumenta a largura da borda para torná-la visível quando o contêiner está em foco */
  }
  


  /* Estilizando o botão de redefinição (limpar) */
  .reset {
    border: none; /* Remove a borda do botão de redefinição */
    background: none; /* Remove o fundo do botão de redefinição */
    opacity: 0; /* Torna o botão de redefinição inicialmente transparente */
    visibility: hidden; /* Torna o botão de redefinição inicialmente oculto */
  }


  
  /* Mostra o botão de redefinição quando há texto no campo de entrada */
  input:not(:placeholder-shown) ~ .reset {
    opacity: 1; /* Torna o botão de redefinição visível quando há texto no campo de entrada */
    visibility: visible; /* Torna o botão de redefinição visível quando há texto no campo de entrada */
  }


  /* Define o tamanho dos ícones SVG */
  .form svg {
    width: 17px; /* Define a largura dos ícones SVG */
    margin-top: 3px; /* Adiciona espaço superior para ajustar verticalmente os ícones */
  }


  /* Estilos para o botão */
.Btn {
    margin-right: 100%;
    margin-left: 50%;
    width: 38%; /* Largura do botão */
    height: 60px; /* Altura do botão */
    border-radius: 40px; /* Raio da borda para criar uma forma arredondada */
    border: none; /* Remove a borda do botão */
    display: flex; /* Exibe os elementos filhos em linha */
    align-items: center; /* Alinha os elementos verticalmente */
    justify-content: center; /* Centraliza o conteúdo horizontalmente */
    color: black; /* Cor do texto */
    background-color: transparent; /* Cor de fundo transparente */
    cursor: pointer; /* Altera o cursor para indicar interatividade */
    position: relative; /* Define a posição como relativa para posicionar elementos internos */
    background: #12FF46; /* Gradiente de fundo */
    transition-duration: .3s; /* Duração da transição para animações */
    letter-spacing: 1.2px; /* Espaçamento entre caracteres do texto */
    font-size: 18px;
    font-family: 'All the Way to the Sun', sans-serif;
    text-decoration: underline;
    justify-content: center;
    position: absolute;
    position: relative;
    margin-top: 3%;
       
    
    
    
                                                
  }
  
  /* Estilos para o preenchimento do ícone no botão */
  .svgIcon path {
    fill: white; /* Preenchimento do ícone com a cor branca */
  }
  
  /* Estilos para a animação quando o botão está em foco */
  .Btn:hover {
    transform: scale(0.95); /* Reduz ligeiramente o tamanho do botão */
    transition-duration: .3s; /* Duração da transição para animação */
  }
  
  /* Pseudo-elemento ::before para criar uma borda inferior animada */
  .Btn::before {
    content: ""; /* Adiciona conteúdo antes do botão */
    position: absolute; /* Define a posição como absoluta para posicionar o elemento */
    width: 80%; /* Largura do elemento pseudo */
    height: 30%; /* Altura do elemento pseudo */
    background: #12FF46; /* Gradiente de fundo */
    filter: blur(10px); /* Aplica um desfoque ao elemento */
    bottom: -3px; /* Desloca o elemento para baixo */
    z-index: -1; /* Coloca o elemento atrás do botão */
    transition-duration: .3s; /* Duração da transição para animação */
  }
  
  /* Estilos para a animação quando o botão está em foco */
  .Btn:hover::before {
    bottom: -1px; /* Desloca ligeiramente o elemento para cima */
    filter: blur(5px); /* Reduz o desfoque do elemento */
    transition-duration: .3s; /* Duração da transição para animação */
  }
  
 
 .texto {
    text-align: center; /* Centraliza o conteúdo horizontalmente */
  }
  
  .horizontal-list {
    list-style: none; /* Remove os marcadores de lista padrão */
    padding: 0; /* Remove o preenchimento padrão da lista */
    text-align: left; /* Alinha o conteúdo da lista à esquerda */
  }
  
  .horizontal-list li {
    display: inline-block; /* Exibe os elementos <li> em linha */
    vertical-align: top; /* Alinha-os ao topo */
    margin-right: 20px; /* Adiciona espaçamento entre os elementos (ajuste conforme necessário) */
  }
  
  h1 {
    height: 80%;
    width: 40%;
    font-size: 24px; /* Define o tamanho da fonte do título */
    margin-bottom: 10px; /* Adiciona espaçamento inferior ao título */
    font-family: 'DM Sans', sans-serif;
    color: aliceblue;
    font-size: 55px;
    justify-content: center;
    margin-left: 40%;


  }
  
  
  .cadastro {
    text-decoration: none; /* Remove o sublinhado do link */
    padding: 1%;
    font-size: 20px;
    font-family: 'All the Way to the Sun', sans-serif;
    color: #12FF46;
    text-decoration: underline;
    margin-right: 0;
    margin-left: 62%;
    font-weight: bold
  }
  
  .cadastro:hover {
    text-decoration: underline; /* Sublinha o link ao passar o mouse */
  }
  
  img{
    margin-left: 50%;
    height: 60%;
    margin-bottom: 2px;
  }

  .recicle{
    background-color: #2F8240;
    padding: 5%;
    font-family: 'DM Sans', sans-serif;
    margin-right: 0;
    text-align: left;
    
 
  }

 
  .reci{
    color: #011E11;
    font-family: 'DM Sans', sans-serif ;
    font-weight: bold;
    margin-left: 65%;
    text-align: center;
  }

p{
    color: black;
    font-family: 'DM Sans', sans-serif;
    font-weight: bold;
    margin-left: 70%;
    font-size: 100%
  
}

.imagem{
    margin-right: 15%;
    display: inline-block;
    vertical-align: top;
}


.reciclar{
    list-style: none; 
    padding: 0;
    text-align: left; 
    display: inline-block; 
    
}


reciclar li {
    display: inline-block; /* Exibe os elementos <li> em linha */
    vertical-align: top; /* Alinha-os ao topo */
    margin-right: 20%; /* Adiciona espaçamento entre os elementos (ajuste conforme necessário) */ 
  
}


/* ----------   Cards ----------------- */ 





.materiais{
    /* margin-top: 50%; */
    background-color: #011E11;
    justify-content: space-around;
    /* overflow: hidden; */
    display: flex;
    margin-right: 10px; /* Espaçamento entre os cards */
}



.card {
  margin-top: 10%;
  position: relative;
  /* aspect-ratio: 16/9; */
  background-color: #f2f2f2;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  perspective: 1000px;
  box-shadow: 0 0 0 5px #ffffff80;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  /* margin-left: 10%; */
  margin-bottom: 10%;
  width: 350px;
  height: 200px;
  border: 1px solid #ccc;
  
  
  /* overflow: hidden; */
}

.card svg {
  width: 48px;
  fill: #333;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

img{
    height: 100%;
     margin-right: 10%%; 
    margin-left:10%
}
.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}

.card__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #f2f2f2;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover .card__content {
  transform: rotateX(0deg);
}

.card__title {
  margin: 0;
  font-size: 20px;
  color: #333;
  font-weight: 700;
}

.card:hover svg {
  scale: 0;
}

.card__description {
  margin: 10px 0 10px;
  font-size: 12px;
  color: #777;
  line-height: 1.4;
}

.card__button {
  padding: 15px;
  border-radius: 8px;
  background: #c1ff72;
  border: none;
  color: black;
}

           
        </style>







    </head>
    <body>

   <!--NavBar-->

    <nav class="navbar">
        <ul>
            <li><a href="#" >CleanDay</a></li>
            <li><a href="#">Coleta</a></li>
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
        <li><img src="img/recicle.JPG" alt="" class="imagem"></li>
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

    </body>
</html>



