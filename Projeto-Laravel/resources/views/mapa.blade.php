<!DOCTYPE html>
<html>
  <head>
    <title>Mapa CleanDay</title>
    <script src="/js/mapa.js" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyA4m1HSu0O0zOuDGMHMHTr6OP5WhHchk&callback=initMap&libraries=places&v=weekly&region=BR" defer></script>
    
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
                
                <input type="number" name="raio" id="raio" class="input-aside" placeholder="Raio" value="2">
                
                <h2>Procurar Material: </h2>
                
                <input type="text" name="buscarMaterial" id="buscarMaterial" class="input-aside" placeholder="Material">
                
                
                <div class="selecao-materiais">
                    <div class="controller">
                        <input type="radio" name="material" id="">
                        <span>Papel</span>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="">
                        <span>Metal</span>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="">
                        <span>Vidro</span>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="">
                        <span>Plástico</span>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="">
                        <span>Óleo de cozinha</span>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="">
                        <span>Eletronicos</span>
                    </div>
                    <div class="controller">
                        <input type="radio" name="material" id="">
                        <span>Pilhas</span>
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