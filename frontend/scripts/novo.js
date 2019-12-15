
var mousePositionControl = new ol.control.MousePosition({
    coordinateFormat: ol.coordinate.createStringXY(12),
    projection: 'EPSG:4326',
    className: 'custom-mouse-position',
    target: document.getElementById('mouse-position'),
    undefinedHTML: '&nbsp;'
  });
var map = new ol.Map({
    controls: ol.control.defaults().extend([mousePositionControl]),
    layers: [new ol.layer.Tile({source: new ol.source.OSM()})],
    target: 'map',
    view: new ol.View({
      center: ol.proj.fromLonLat([-51.925282,-14.235004]),
      zoom: 4,
      minZoom: 4
    })
  });
  
  var div = document.createElement("div");
  div.title = "Marker";
  div.id = "marker";
  div.className = "marker";
  div.innerHTML = "<img src='imagens/icon.png'></img>";

  marker = new ol.Overlay({
      position: ol.proj.fromLonLat([parseFloat(lon.value),parseFloat(lat.value)]),
      positioning: 'center-center',
      element: div,
      stopEvent: false
  });
  map.addOverlay(marker);

  map.addEventListener('click',clique,false);
  function clique(e){
    var coord = document.getElementById("mouse-position").innerHTML;
    var long = coord.substring(35,coord.indexOf(','));
    var lati = coord.substring(coord.indexOf(',')+1, coord.indexOf('/')-1);
    lon.value = long;
    lat.value = lati;
    marker.setPosition(ol.proj.fromLonLat([parseFloat(long),parseFloat(lati)]));
  }

  