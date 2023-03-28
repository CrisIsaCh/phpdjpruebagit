<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
 
  <?php include "cabezal.php"  ?>
  <div align="center"><br>
      
      <h1>BIENVENIDO AL FORMULARIO 1</h1>
      <h3>REGISTRO USUARIO</h3>
      <form action="recibir2.php" method="post">

      <input type="text" name="usuario" id="" placeholder=" nombre de usuario">
      <br>

      <input type="email" name="correo" id="" placeholder=" correo electronico">
      <br>
      <input type="date" name="nacimiento" id="" placeholder=" fecha de nacimiento">
      <br>
      <label for="pierna">PIERNA HABILIDOSA</label>
      <br>
      <input type="radio" name="pierna" id=""value="izquierda">
      <label for="izquierda">Izquierda</label>
      <input type="radio" name="pierna" id="" value="derecha">
      <label for="derecha">Derecha</label>
      <input type="radio" name="pierna" id="" value="ambas">
      <label for="derecha">Ambas</label>

      


      <input type="submit" value="Enviar"> 



      </form>

      
      
      

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>