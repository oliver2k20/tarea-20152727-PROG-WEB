<html>

<head> 

<title> Tarea no.6 2015-2727 </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScr	ipt -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<script> 

function initMap() {
  var myLatLng = {lat: 18.45, lng: -69.66};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: myLatLng
	
  });
  var myLatLng = {lat: 18.50 , lng: -69.90};
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
<?php 
$CI = & get_instance();

$rs = $CI->db->query("select * from personas order by id desc limit 10");

$datos = $rs->result();

foreach($datos as $persona) { 

echo "  var myLatLng = {lat: {$persona->lat}, lng: {$persona->lon}};
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
  ";

}
?>

</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4diXlmO4azRXqIYDbve0wf3nnPBgWlv4&callback=initMap"></script>
  </body>

</head>

<body> 

<div class="principal">
<div class="container"> 
<h1> Lucha por tu Pais </h1>
<div id="map" style="width: 500px; height:300px; background-color:#cccccc;">


 Mapa
</div>



<br>
<a href="<?php echo base_url('app/registro'); ?>" class="btn btn-default"> Registrarse </a>
 
</div>
</div>


</body>



</html>