<?php 

 


if (isset($_GET['borrar'])){


  include '../app/config/configurar.php';

$borrar = $_GET['borrar'];

$delete = "DELETE FROM datos WHERE id = ".$borrar;
 
if(mysqli_query( $link,$delete))
{  

$msjreg = '<div class="alert alert-danger" role="alert">
              Registro eliminado correctamente
            </div>';
}
else
{  

$msjreg = '<div class="alert alert-danger" role="alert">
                       Error al eliminar: ' . $sql . mysqli_error($link) .'
            </div>';


}  

 
mysqli_close($link);

}


$msjreg = "";
$nombre = "";
if (isset($_POST['nombre'])) {

	include '../app/config/configurar.php';

if (isset($_POST['nombre'])) $nombre = $_POST['nombre'];
$edad = "";
if (isset($_POST['edad'])) $edad = $_POST['edad'];
$sexo = "";
if (isset($_POST['sexo'])) $sexo = $_POST['sexo'];
$estatura = "";
if (isset($_POST['estatura'])) $estatura = $_POST['estatura'];
$peso = "";
if (isset($_POST['peso'])) $peso = $_POST['peso'];
$eres = "";
if ($sexo == "M") $eres = "un";  
elseif ($sexo == "F") $eres = "una";

$hoy = date('Y');
$nacimiento = $hoy - intval($edad);

$ultdig = substr($nacimiento, -2);
$raiz = sqrt($ultdig);
$redond = round($raiz); 


$v1 = 0;
$v2 = 1;

//Realizaremos n sucesiones de la secuencia de Fibonacci, donde n = $estatura
for ($i=0; $i < $estatura; $i++) { 
    
    //Variable temporal para almacenar el número de la primera variable
    $temp = $v1;

    //La primera variable pasa a contener el valor de la segunda
    $v1 = $v2;

    //Sumamos el valor de la temporal y la variable 1
    $v2 = $temp + $v1;

    //Imprimimos el resultado
    //$v1 . '<br>';
}
$fib = $v1;
if ($edad < 18){
$msj = 'Hola '.$nombre.' eres '.$eres.' joven muy saludable,
te recomiendo salir a jugar al aire libre durante '.$fib.' minutos 
diarios'; 


}
if ($edad >= 18){

if ($peso < 30){
$msj = 'Hola '.$nombre.' eres una persona muy saludable,te recomiendo comer menos y salir a correr '.$redond.' km diarios';   

}else if ($peso >= 30){
$msj = 'Hola '.$nombre.' eres una persona muy saludable,te recomiendo comer mas y salir a correr '.$redond.' km diarios';   

}


}


     $sql = "INSERT INTO datos(id,nombre, edad, sexo, estatura, peso, msj )VALUES (null,'$nombre', '$edad', '$sexo', '$estatura', '$peso', '$msj')";

            if (mysqli_query($link, $sql)) {

              $msjreg = '<div class="alert alert-success" role="alert">
              Registro ingresado correctamente
            </div>';
               
            } else {
              $msjreg = '<div class="alert alert-danger" role="alert">
                       Error: ' . $sql . mysqli_error($link) .'
            </div>';
                
            }
            $link->close();


}