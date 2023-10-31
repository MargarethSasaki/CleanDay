<!DOCTYPE html>
<html>
  <head>
    <title>Mapa - CleanDay</title>
    <script src="/js/mapa.js" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyA4m1HSu0O0zOuDGMHMHTr6OP5WhHchk&callback=initMap&libraries=places&v=weekly&region=BR" defer></script>
    
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/mapa.css">

    
  </head>
  <body>


 <!--NavBar-->

    <nav class="navbar">
        <ul>
            <li><a href="/" >CleanDay</a></li>
            <li><a href="/coleta">Coleta</a></li>
            <li><a href="/sobre">Sobre</a></li>
            <li><a href="/materiais">Materiais</a></li>  
        </ul>
    </nav>


    <div class="container-dashboard">
        <aside>
            <div class="container-img centralizar">
                <img src="/img/logo.png" alt="logo" >
            </div>
            <!-- <form action="" method="post"> -->
            <div class="container-reciclar">
                <h2>Buscar Local</h2>
                
                <input type="text" name="busca" id="busca" class="input-aside" placeholder="Buscar" value="Etec zona Leste">
                
                <h2>Raio em km</h2>
                
                <div class="controller container-raio">
                    <button id="-">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <div class="box-raio" id="raio">1</div>

                    <button id="+">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
                
                 <h2>Procurar Material: </h2>
                <!--
                <input type="text" name="buscarMaterial" id="buscarMaterial" class="input-aside" placeholder="Material">
                 -->
                
                <div class="selecao-materiais">
                    <div class="controller">
                        <input type="radio" name="material" id="papel">
                        <label for="papel">Papel</label>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="metal">
                        <label for="metal">Metal</label>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="vidro">
                        <label for="vidro">Vidro</label>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="plastico">
                        <label for="plastico">Plástico</label>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="oleo de cozinha">
                        <label for="oleo de cozinha">Óleo de cozinha</label>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="eletronicos">
                        <label for="eletronicos">Eletronicos</label>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="pilhas">
                        <label for="pilhas">Pilhas</label>
                    </div>
                </div>
            </div>
            <div id="enviarAside" class="centralizar">
                <button>
                    Pesquisar
                </button>
            </div>
            <!-- </form> -->
        </aside>
        <main>
            <!-- Loader -->
            <div id="loader-container">
                <div class="loader"></div>
            </div>
            <!-- Mapa -->
            <div id="gmp-map" class="transicao"></div>
        </main>
        
    </div>
    
  </body>
</html>