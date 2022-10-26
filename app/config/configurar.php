<?php 

// Credenciales para acceder al servidor
$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "prueba";



$link = mysqli_connect($host, $usuario, $pass);
// Selecionamos la base de datos
mysqli_select_db($link, $bd);
//Correcion de tildes
$mitilde = $link->query("SET NAMES 'utf8'"); 


