const brasil = [-51.925282,-14.235004];
const center = ol.proj.fromLonLat(brasil);
const view = new ol.View({
  center: center,
  zoom: 4,
  minZoom: 4
});
var map = new ol.Map({
  layers: [new ol.layer.Tile({source: new ol.source.OSM()})],
  target: 'map',
  view: view
});

map.on('moveend',verificarZoom);

 var marker = []
    for(var i=0; i<contatos.length; i++){

      var div = document.createElement("div")
      div.title = "Marker"
      div.id = "marker"+i
      div.className = "marker"
      div.innerText = " ";

      marker[i] = new ol.Overlay({
          position: ol.proj.fromLonLat([contatos[i].getLon(),contatos[i].getLat()]),
          positioning: 'center-center',
          element: div,
          stopEvent: false
      });
      map.addOverlay(marker[i]);
    }
  function visual(lon, lat){
    map.getView().setCenter(ol.proj.fromLonLat([lon,lat]));
    map.getView().setZoom(10);
  }

  function verificarZoom(){
    var mapZoom = map.getView().getZoom();
    if(mapZoom < 6){
        ocultar();
    }
    else{
        mostrar();
    }
  }

  function ocultar(){
    for(var i=0; i < contatos.length;i++){
        div = document.getElementById('marker'+i);
        div.innerText = ' ';
        div.innerHTML = "<img src='imagens/icon.png'></img>";
    }
  }
  function mostrar(){
    for(var i=0; i < contatos.length;i++){
      div = document.getElementById('marker'+i);
      div.innerHTML = "<img src='imagens/icon.png'></img><b>" + contatos[i].getNome() + "</><br><div class='telefone'> &nbsp &nbsp &nbsp"+ contatos[i].getTelefone()+ "</div></b>";
    }
  }