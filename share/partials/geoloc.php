<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCG_t2l6fPkH3zL4YNUgvcwH7PQEwRXHGk" ></script>

<script src="<?php echo $ponto; ?>config/js/geomap.js"></script>

<script type="text/javascript"> 


function initialize(){

//alert('teste');

<?php
//echo $pagina;
if(($pagina == 'cadastro-veiculo/') AND ($logado != 'sim')){


echo '$("#concha_loginn").focus();';


}

?>

$("#alfa").addClass("dnone");
//$(".popup").css("display", "none");
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


//alert(lat + "::" + lng);

$("#teste_g").val(lat + "::" + lng);




<?php
/*

if(($pagina == 'busca/') || ($pagina == 'anucios/')){




echo 'var latlng = lat + "," +lng; 
var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + latlng + "&sensor=true"; 
$.getJSON(url, function (data) { 
    for(var i=0;i<data.results.length;i++) 
    { 
        var adress = data.results[i].formatted_address; 
        alert(adress); 
       // document.getElementById("mapa_novo").innerHTML = adress; 
       // endereco_campo.value = adress; 
    } 
});';





}

OBSOLETO

*/

?>





codeLatLng(lat, lng)
}
function errorFunction(){
//setCookieLoc("");

}

function codeLatLng(lat, lng) {




var latlng = new google.maps.LatLng(lat, lng); 

//alert(lat + "::" + lng);

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



var ret = results[2].formatted_address;
//var reto = ret.split("- ");
//var rit = reto[2];

var rat = results[0].formatted_address;


var nome ="teste";
if(nome == 'Brasil'){

initialize();

}else{

//alert(ret);

document.getElementById("nome_geog").innerHTML = "<b>" + ret + "</b> ";
//document.getElementById('satan').value = rit; 

document.getElementById("busca_rua").value = rat ;

document.getElementById("regra_geog").innerHTML = "";



$.getJSON("<?php echo $ponto; ?>funcoes/registra_regiao.php",
    {bingo: "<?php echo '-:::'; ?>"+ret},

    function(json){
        
        var belga = json.campo;
        
      
    
    }); // fim do json


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