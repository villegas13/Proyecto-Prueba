<?php 

  //Cargamos librerias
  require_once 'librerias/Base.php';
  require_once 'librerias/Controlador.php';
  require_once 'librerias/Core.php';

  require_once '../app/config/configurar.php';

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

  .tdtable{
    display: none;
  }
  .tdtablevis{
    display: block;
  }


</style>
  <title></title>
 <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">

  function detalle(id){
    
            $('.tdtable'+id).show();
            return false;
    
  }       

</script>
</head>
<body>
<div style="margin-left: 15%;">
<form method="post">
  <button type="submit" name="principal" class="btn btn-primary">Volver a pagina principal</button>
</form>
<form method="post"  style="width: 75%!important;padding-top: 2vw; padding-bottom: 2vw;" class="form-control">

<p style="font-size:1.5vw;  text-align: center;font-weight: normal;">Datos de pacientes con historias médicas</p>
<table class="table table-striped" id="GrdDatos">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Estatura</th>
      <th scope="col">Peso</th>
      <th scope="col">Detalle</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

<?php 

include '../app/config/configurar.php';

// Consulta para pedir información de la tabla
$resultados = mysqli_query($link, "SELECT * FROM datos");

// Ejecuta el ciclo de acuerdo a la consulta SQL $resultados
while ($fila = mysqli_fetch_array($resultados)){
$id=$fila["id"];
$nombre=$fila["nombre"];
$edad=$fila["edad"];
$sexo=$fila["sexo"];

if ($sexo == "M"){
  $sexo = "Masculino";
}

if ($sexo == "F"){
  $sexo = "Femenino";
}

$estatura=$fila["estatura"];
$peso=$fila["peso"];
$msj=$fila["msj"];


  echo   '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$nombre.'</td>
      <td>'.$edad.' años</td>
      <td>'.$sexo.'</td>
      <td>'.$estatura.' cm</td>
      <td>'.$peso.' kg</td>
      <td id="detalle" onclick="detalle('.$id.')" style="cursor:pointer"><a style="color:#0000FF; text-decoration: underline;">Ver Detalles</a></td>
      <td class="bord"><a style="color:#FF0000; text-decoration: underline;" href="?borrar='.$id.'">Eliminar</a></td>
      
    </tr>';
 echo '<tr class="tdtable'.$id.'" style="display:none">     
       <td style="background-color:#000; color:white" colspan="8">'.$msj.'</td>
       </tr>';

}
?>

  </tbody>
</table>
</form>

</div>
</body>
</html>




