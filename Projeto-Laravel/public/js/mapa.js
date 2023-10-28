// VARIAVEIS E CONSTANTES


const btnEnviar = document.querySelector("#enviarAside")
const radios = [...document.querySelectorAll("input[type='radio']")]
const loader = document.querySelector("#loader-container")
const containerMapa = document.getElementById("gmp-map")


let materiailBuscado;
var lat
var lng 

let infoWindowAberto = null;
// FUN��ES

function autoCompletar(){
    const autocomplete = new google.maps.places.Autocomplete(
        document.getElementById("busca"), {
            types: ["geocode","establishment"], // Especifica o tipo de sugestões (geográficas)
            country: "BR",
            administrative_area_level_1: "SP" // SP representa São Paulo
        }
      );

      // Adicione um ouvinte de evento para quando um local for selecionado
    autocomplete.addListener("place_changed", function () {
        const place = autocomplete.getPlace(); // Obtenha informações sobre o local
        // Faça algo com as informações do local, como exibir no mapa ou em uma lista.
        console.log(place);
    });
}



async function initMap(dados = "") {

    

    const etecZonaLeste = {
      "lat": -23.522975759039916, 
      "lng": -46.475854920081524
    };
    // let raio = 
    // const geocoder = new google.maps.Geocoder()
    const map = await new google.maps.Map(containerMapa, {
      zoom: 15,
      center: etecZonaLeste,
      fullscreenControl: false,
      zoomControl: true,
      streetViewControl: false
    });
    // console.log(etecZonaLeste)
    // Quando o mapa estiver carregado, oculte o carregamento
  map.addListener("tilesloaded", function () {
    containerMapa.classList.add("visible");
    loader.classList.add("hide")
  });
    
    autoCompletar()
    

    // GEOCODER
    if (dados) {
        let materiais = dados[2]
        let posicoes = []
        let centroPos = await getLocal(dados[0])
        centroBusca(map,centroPos,dados[1])
        map.setCenter(centroPos);
        fetch("/consulta/" + JSON.stringify(materiais))
        .then((resposta) => {
            if (!resposta.ok) {
                throw new Error('Erro na solicitação');
            }
            return resposta.json();
        })
        .then((resposta) => {
            console.log(resposta)
            let locais = resposta.endereco; // Defina locais dentro deste escopo
            let unidades = resposta.unidades
            locais.map((el) => {
                posicoes.push({'lat':el.tb02latitude,'lng':el.tb02longitude})
            })
            
            // Mapear e geocodificar os locais
            for (let i = 0; i < posicoes.length; i++) {
                // Calcular a distância entre as coordenadas
                const distancia = calcularDistancia(centroPos.lat, centroPos.lng, posicoes[i].lat, posicoes[i].lng, dados[1]);
                // Verificar se a distância é menor ou igual a 1 km
                if (distancia <= 1) {
                    // console.log(posicoes[i])
                    const infoWindow = new google.maps.InfoWindow({
                        content:'<div class="container-infowindow">'+
                                    '<h3>'+ unidades[i].tb04nome +'</h3>'+
                                    '<div>'+
                                    '<p>Horário: '+ unidades[i].tb04horarioFunc +'</p>'+
                                    '<p>Contato: '+ unidades[i].tb04tel +'</p>'+
                                    '<p>localização: '+ locais[i].tb02logradouro +', '+ locais[i].tb02numero +', '+ locais[i].tb02bairro +'</p>'+
                                    '<p>Coleta: '+  +'</p>'+
                                    '</div>'+
                                '</div>'
                      });
                    marks(posicoes[i], map,infoWindow)
                } else {
                    // console.log(posicoes[i])
                    // console.log("A coordenada está fora do raio de 1 km da coordenada de referência.");
                }
            }
        })
        .catch((erro) => {
            console.error("Ocorreu um erro ao buscar e geocodificar os locais: " + erro);
        });
        // map.setCenter = centroPos;
    }

}
  function marks(coords,map,infoWindow){

      
      var iconSize = new google.maps.Size(32, 32); // Tamanho desejado do �cone
      var markerIcon = {
          url: "marker.ico",
          scaledSize: iconSize
        };
        const marcador = new google.maps.Marker({
            position: coords, // Coordenadas do marcador
            map: map, // Associe o marcador ao mapa
            title: 'Meu Marcador' // Título opcional para o marcador
        });
        marcador.addListener('click', () =>{
            infoWindow.open(map, marcador);
        });
        marcador.addListener('click', function() {
            // Fecha o InfoWindow aberto anteriormente, se houver
            if (infoWindowAberto) {
              infoWindowAberto.close();
            }

            // Abre o InfoWindow atual
            infoWindow.open(map, marcador);
            
            // Atualiza a referência para o InfoWindow aberto atualmente
            infoWindowAberto = infoWindow;

        })
    }
  function centroBusca(map,coord,raio){
    const testewindow = new google.maps.InfoWindow({
        content:'<div class="container-infowindow">'+
                    '<h3>Seu local</h3>'+
                    '<p>Horário:Seu Horário</p>'+
                    '<p>Contato:Seu telefone</p>'+
                    '<p>localização'+  +'</p>'+
                    '<p>Coleta:'+  +'</p>'+
                '</div>'
      });
    const circle = new google.maps.Circle({
        strokeColor:'#fff',
        strokeWeight: 2,
        strokeOpacity:1,
        fillColor:'#333',
        fillOpacity:.4,
        center: coord,
        radius:raio *1000,
        map:map
    })

    marks(coord,map,testewindow)
  }
  function getLocal (loc){
    return new Promise((resolve, reject) => {
        var apiKey = 'AIzaSyDyA4m1HSu0O0zOuDGMHMHTr6OP5WhHchk';
        var address = loc;
        // Construa a URL da solicitação à API de Geocodificação
        var geocodingUrl = `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(address)}&key=${apiKey}`;

        // Faça uma solicitação GET usando XMLHttpRequest
        var xhr = new XMLHttpRequest();
        xhr.open('GET', geocodingUrl, true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                // A solicitação foi bem-sucedida, analise a resposta JSON
                var data = JSON.parse(xhr.responseText);

                if (data.status === 'OK') {
                    var location = data.results[0].geometry.location;
                    var latitude = location.lat;
                    var longitude = location.lng;

                    resolve({
                        lat: latitude,
                        lng: longitude
                    });
                } else {
                    reject('Erro na solicitação de geocodificação:' + data.status);
                }
            } else {
                reject('Erro na solicitação de geocodificação:' + xhr.statusText);
            }
        };

        xhr.onerror = function () {
            reject('Erro na solicitação de geocodificação');
        };

        xhr.send();
    });
  }
  function calcularDistancia(lat1, lon1, lat2, lon2,raio) {
    // Raio da Terra em metros
    const raioTerra = 6371000;

    // Converter graus para radianos
    const degToRad = (graus) => graus * (Math.PI / 180);

    // Diferença de coordenadas em radianos
    const dLat = degToRad(lat2 - lat1);
    const dLon = degToRad(lon2 - lon1);

    // Fórmula de Haversine
    const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
              Math.cos(degToRad(lat1)) * Math.cos(degToRad(lat2)) *
              Math.sin(dLon / 2) * Math.sin(dLon / 2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

    // Distância em metros
    const distancia = raioTerra * c;

    // Distância em quilômetros
    const distanciaEmKm = distancia / (raio * 1000);

    return distanciaEmKm;
}

// EVENTOS

btnEnviar.addEventListener("click", async ()=>{
    const buscaLocal = document.querySelector("#busca")
    const raio = document.querySelector("#raio")

    radios.map((el)=>{
        let span = el.nextElementSibling
        if(el.checked){
            materiailBuscado = span.innerHTML
        }
    })
    let dados = [buscaLocal.value,raio.value,materiailBuscado]
    buscaLocal.value = ''
    containerMapa.classList.remove("visible")
    loader.classList.remove("hide")
    initMap(dados)
})




