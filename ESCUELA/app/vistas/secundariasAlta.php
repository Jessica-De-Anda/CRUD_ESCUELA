<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta una escuela</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
   <h1>Dar de alta una escuela </h1>
  <fieldset>
   
  <form action='<?php print RUTA_APP."secundarias/alta/"; ?>' method="POST">
    <table>
      <tr><td ><label for="Nombre">Nombre:</label></td>
        <td class="cien"><input type="text" name="Nombre"></td>
      </tr>
      <tr><td><label for="Delegacion">Delegacion:</label></td>
        <td class="cien"><input type="text" name="Delegacion"></td>
      </tr>
      <tr><td><label for="Colonia">Colonia:</label></td>
        <td class="cien"><input type="text" name="Colonia"></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  </fieldset>
  <a href='<?php print RUTA_APP."secundarias/"; ?>'>Regresar</a>
</body>
</html>