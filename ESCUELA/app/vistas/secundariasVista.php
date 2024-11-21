<!DOCTYPE html>
<html>
<head>
  <title>Lista de Escuelas</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
  <h1>Lista de Escuelas</h1>
  <table>
    <thead>
      <th>id</th>
      <th>Nombre</th>
      <th>Delegacion</th>
      <th>Colonia</th>
      <th>Modificar</th>
      <th>Borrar</th>
    </thead>
    <tbody>
      <?php
      for ($i=0; $i < count($data); $i++) { 
        print "<tr>";
        print "<td>".$data[$i]["id"]."</td>";
        print "<td>".$data[$i]["Nombre"]."</td>";
        print "<td>".$data[$i]["Delegacion"]."</td>";
        print "<td>".$data[$i]["Colonia"]."</td>";
        print "<td><a href='".RUTA_APP."secundarias/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
        print "<td><a href='".RUTA_APP."secundarias/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
        print "</tr>";
      }
    ?>
    </tbody>
  </table>
  <br>
  <a href='<?php print RUTA_APP."secundarias/alta/"; ?>'>Dar de alta una secundaria</a>
</body>
</html>