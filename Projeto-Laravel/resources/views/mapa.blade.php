<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker</title>
    <script src="/js/mapa.js" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyA4m1HSu0O0zOuDGMHMHTr6OP5WhHchk&callback=initMap&libraries=&v=weekly&region=BR" defer></script>
    
    <link rel="stylesheet" href="/css/mapa.css">

    
  </head>
  <body>
    <div class="container-dashboard">
        <aside>
            <div class="container-img centralizar">
                <img src="/img/logo.png" alt="logo" >
            </div>
            <!-- <form action="" method="post"> -->
            <div class="container-reciclar">
                <h2>Buscar Local</h2>
                
                <input type="text" name="busca" id="busca" class="input-aside" placeholder="Buscar" value="Sao Paulo">
                
                <h2>Raio em km</h2>
                
                <input type="number" name="raio" id="raio" class="input-aside" placeholder="Raio" value="2">
                
                <h2>Procurar Material: </h2>
                
                <input type="text" name="buscarMaterial" id="buscarMaterial" class="input-aside" placeholder="Material">
                
                
                <div class="selecao-materiais">
                    <div class="controller">
                        <input type="checkbox" name="" id="">
                        <span>Papel</span>
                    </div>
                    <div class="controller">
                        <input type="checkbox" name="" id="">
                        <span>Metal</span>
                    </div>
                    <div class="controller">
                        <input type="checkbox" name="" id="">
                        <span>Vidro</span>
                    </div>
                    <div class="controller">
                        <input type="checkbox" name="" id="">
                        <span>Plástico</span>
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
            <div class="nav"></div>
            <div id="gmp-map"></div>
        </main>
        
    </div>
    
  </body>
</html>