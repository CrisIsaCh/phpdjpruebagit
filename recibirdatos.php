<?php

$nombre=$_POST["nombre"];
$contraseña=$_POST["contraseña"];

$usuario="Admin";
$password="12345";

if ($usuario==$nombre && $contraseña==$password) {
    header("Location:paginaprincipal.php");
  }else{
      echo "<br><h1>Error al ingresar Ususario y Contraseña</h1>";
  }
  ?>