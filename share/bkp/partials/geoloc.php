<script src="//maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCG_t2l6fPkH3zL4YNUgvcwH7PQEwRXHGk" ></script>

<script src="<?php echo $ponto; ?>config/js/geomap.js"></script>

<script type="text/javascript"> 


function initialize(){


$("#alfa").addClass("dnone");
$(".popup").css("display", "none");
//$('#satanazi_f').val('not');

geocoder = new google.maps.Geocoder();

//alerta();

}

var geocoder;



if (navigator.geolocation){
navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
function successFunction(position) {
var lat = position.coords.latitude;
var lng = position.coords.longitude;



codeLatLng(lat, lng)
}
function errorFunction(){
setCookieLoc("");

}

function codeLatLng(lat, lng) {




var latlng = new google.maps.LatLng(lat, lng); 

//$("#satanu").val(lat + "::" + lng);

var geocoder = new google.maps.Geocoder();


geocoder.geocode({'latLng': latlng}, function(results, status) { 




if (status == google.maps.GeocoderStatus.OK) {
	
	
console.log(results)


if (results[1]) {
for (var i=0; i<results[0].address_components.length; i++) {
for (var b=0;b<results[0].address_components[i].types.length;b++) {
if (results[0].address_components[i].types[b] == "administrative_area_level_2") {
city= results[0].address_components[i];
break;
}
}
}



var ret = results[1].formatted_address;
var reto = ret.split("- ");
var rit = reto[2];

var rat = reto[1] + ' - ' + reto[2];


var nome = rit.split(", ");
if(nome[1] == 'Brasil'){

initialize();

}else{

//alert(ret);

document.getElementById("nome_geog").innerHTML = "<b>" + rit + "</b> ";
//document.getElementById('satan').value = rit; 

document.getElementById("busca_rua").value = rat ;




}
}else{
alert("Erro de Geolocalização"); 
}
}else{
alert("Erro de Geolocalização: " + status); 
}
});
}
</script> 