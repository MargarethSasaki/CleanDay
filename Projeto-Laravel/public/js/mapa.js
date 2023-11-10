// VARIAVEIS E CONSTANTES


const btnEnviar = document.querySelector("#enviarAside")
const radios = [...document.querySelectorAll("input[type='radio']")]
const loader = document.querySelector("#loader-container")
const containerMapa = document.getElementById("gmp-map")
const body = document.querySelector("body")
const boxraio = [...document.querySelectorAll(".container-raio button")]
let numeroRaio = 0;
// var alturaDaTela = window.innerHeight;
// console.log(alturaDaTela);
// body.style.height = alturaDaTela+"px";

let materiailBuscado;
var lat
var lng 
var pesq;
let infoWindowAberto = null;
// FUNÇÕES



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
        // console.log(place);
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
        pesq = 1;
        centroBusca(map,centroPos,dados[1],dados[0])
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
                    let numeroDoLocal = locais[i].tb02numero == '0'? 's/n' : locais[i].tb02numero;
                    const enderecoDeDestino = locais[i].tb02logradouro + ',' +  numeroDoLocal + ' - ' + locais[i].tb02bairro + " " + locais[i].tb02cidade + ' - ' + locais[i].tb02estado + ',CEP: ' + locais[i].tb02cep 
                    const infoWindow = new google.maps.InfoWindow({
                        content:'<div class="container-infowindow">'+
                                    '<h3>'+ unidades[i].tb04nome +'</h3>'+
                                    '<div>'+
                                    '<p><b>Horário:</b> '+ unidades[i].tb04horarioFunc +'</p>'+
                                    '<p><b>Contato:</b> '+ unidades[i].tb04tel +'</p>'+
                                    '<p><b>localização:</b> '+ enderecoDeDestino +'</p>'+
                                    '<p><b>Coleta:</b> '+ materiais +'</p>'+
                                    '<p><a href="https://www.google.com.br/maps/dir/'+ dados[0] +', Brasil /' + enderecoDeDestino + '">'+
                                    '<span>Veja como chegar lá </span><i class="fa fa-road"></i>'+
                                    '</a></p>'+
                                    '</div>'+
                                '</div>'
                      });
                    marks(posicoes[i], map,infoWindow,unidades[i].tb04nome,0)
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
  function marks(coords,map,infoWindow,nome,pesq){
        // iconCustomizado = new google.maps.Icon()
        var ico;
        if( pesq == 1){
            ico = "img/marcadorCentro.png";
        }else{
            ico = "img/marcadorUnidade.png";
        }

        var iconSize = new google.maps.Size(50, 50); // Tamanho desejado do �cone
        var markerIcon = {
          url: ico,
          scaledSize: iconSize
        };
        const marcador = new google.maps.Marker({
            position: coords, // Coordenadas do marcador
            map: map, // Associe o marcador ao mapa
            title: nome, // Título opcional para o marcador
            icon:markerIcon
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
                    '<h3>Seu Local</h3>'+
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

    marks(coord,map,testewindow,'Sua localização',1)
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
        let label = el.nextElementSibling
        if(el.checked){
            materiailBuscado = label.innerHTML
        }
    })
    
    let dados = [buscaLocal.value,raio.innerHTML,materiailBuscado]
    buscaLocal.value = ''
    containerMapa.classList.remove("visible")
    loader.classList.remove("hide")
    initMap(dados)

    radios.map(el => el.checked = false)
    numeroRaio = 1
    raio.innerHTML = '1'
})

boxraio.map((el)=>{
    el.addEventListener("click",()=>{
        let raio = document.querySelector("#raio")
        if(el.id == '+' && numeroRaio < 51){
            numeroRaio += 1;
            raio.innerHTML = numeroRaio;
        }else if(el.id == '-' && numeroRaio > 1){
            numeroRaio -= 1;
            raio.innerHTML = numeroRaio;
        }
    })
    // el.addEventListener("mousedown",()=>{
    //     let raio = document.querySelector("#raio")
    //     if(el.id == '+' && numeroRaio < 51){
    //         numeroRaio += 1;
    //         raio.innerHTML = numeroRaio;
    //     }else if(el.id == '-' && numeroRaio > 1){
    //         numeroRaio -= 1;
    //         raio.innerHTML = numeroRaio;
    //     }
    // })
})


