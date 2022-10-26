<?php 

  //Cargamos librerias
  require_once 'librerias/Base.php';
  require_once 'librerias/Controlador.php';
  require_once 'librerias/Core.php';
  require_once 'controladores/Paginas.php'; 
  require_once '../app/config/configurar.php';

  if (!isset($_POST['result'])  ) {

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<style type="text/css">
  body{
    padding: 0;
    margin: 0;
    background-color: #f2f2f2;
    font-family: Arial;
  }
</style>
  <title>Complete el formulario</title>
</head>
<body>
<div style="margin-left: 15%;">
<form method="post">
  <button type="submit" name="result" class="btn btn-primary">Ver histórico médico</button>
</form>
<form method="post"  style="width: 75%!important;padding-top: 2vw; padding-bottom: 2vw;" class="form-control">
<p style="font-size:1.5vw;text-align: center;font-weight: normal;">Introduzca los datos solicitados</p>
<?php 
echo $msjreg;
?>
<label style="font-weight:bold;">Nombre: </label>
<input class="form-control" type="text" name="nombre" maxlength="30" minlength="2" pattern="^[a-z A-Z0-9_.-]*$" placeholder="Ej. Pedro López" required><br>
<label style="font-weight:bold;">Edad(años): </label>
<input class="form-control" type="text" name="edad" maxlength="3" minlength="1" pattern="^[0-9_.-]*$" placeholder="Ej. 25" required><br>
<label style="font-weight:bold;">Sexo: </label>
<select class="form-control" name="sexo"   required>
  <option value="0" hidden>Seleccione el sexo</option>
  <option value="M">Masculino</option>
  <option value="F">Femenino</option>
</select><br>
<label style="font-weight:bold;">Estatura(cm): </label>
<input class="form-control" type="text" name="estatura" maxlength="4" minlength="1" pattern="^[0-9_.-]*$" placeholder="Ej. 85" required><br>
<label style="font-weight:bold;">Peso(kilos): </label>
<input class="form-control" type="text" name="peso" maxlength="3" minlength="1" pattern="^[0-9_.-]*$" placeholder="Ej. 80" required><br>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>



</div>
</body>
</html>


<?php
}


if (isset($_POST['result'])  ) {

require_once '../app/resultados.php';

}

?>

