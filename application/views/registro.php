<!DOCTYPE html> 

<?php

$mensaje ="";



$CI =& get_instance();

if($_POST) {
	
	$datos = $_POST;
	$datos['ip'] = $_SERVER['REMOTE_ADDR'];
	

	
	$CI->db->insert('personas',$datos);
	
	$mensaje ="Registro recibido";
}


?>





<head> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<title> Tarea no.6 2015-2727 </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body> 


<div class="container"> 

<h3> <?php echo $mensaje; ?></h3>
<h3> Firma con nosotros </h3>

<form method="post">
<div class="row">
<div class="col col-sm-6">
<div class="form-group input-group">
<span class="input-group-addon"> Cedula </span>
<input type="text" name="cedula" class="form-control">
</div>
<div class="form-group input-group">
<span class="input-group-addon"> Nombre </span>
<input type="text" name="nombre" class="form-control">
</div>
<div class="form-group input-group">
<span class="input-group-addon">  Apellido</span>
<input type="text" name="Apellido" class="form-control">
</div>
<div class="form-group input-group">
<span class="input-group-addon">  Telefono</span>
<input type="text" name="telefono" class="form-control">
</div>

<div class="form-group input-group">
<span class="input-group-addon"> Comentario </span>
<textarea name="comentario" class="form-control"> </textarea>
</div>

<div class="text-center">

<button type="submit" class="btn btn-default">Guardar </button> 
<a href="<?php echo base_url('app') ?>" class="btn btn-default"> Regresar </a>


<input type="text" hidden="hidden"name="lat" id="lat"/>
<input type="text" hidden="hidden"  name="lon" id="lon"/>



</div>
<script> 
window.onload = function() {

navigator.geolocation.getCurrentPosition(function(datos) {

document.getElementById('lat').value = datos.coords.latitude;
document.getElementById('lon').value = datos.coords.longitude;

});
}

</script>
</div>

</div>
</form>
</div>





</body>



</html>