<h1>Registro de Usuarios</h1>
<?php
//print_r($_POST);

$usuario=$_POST["usuario"];
$correo=$_POST["correo"];
$fechanacimiento=$_POST["nacimiento"];

//echo $fechanacimiento;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr>
    <th scope="col">Nombre Usuario</th>
    <th scope="col">Correo Electronico</th>
    <th scope="col">Fecha de Nacimiento</th>
    
</tr>

<tr>
  <td><?php echo $usuario ?></td>
  <td><?php  echo $correo?></td>
  <td><?php  echo $fechanacimiento?></td>
</tr>

<tr>
  <td>HTML</td>
  <td>20</td>
  <td>16:00 - 20:00</td>
</tr>

<tr>
  <td>Dreamweaver</td>
  <td>60</td>
  <td>16:00 - 20:00</td>
</tr>
</table>
    
</body>
</html>
