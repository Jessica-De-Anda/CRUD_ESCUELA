<!DOCTYPE html>
<html>
<head>
  <title>Modificar una escuela</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."secundarias/modificar/"; ?>' method="POST">
    <table>
      <tr><td><label for="Nombre">Nombre:</label></td>
        <td><input type="text" name="Nombre" value="<?php print $data["Nombre"]; ?>"></td>
      </tr>
      <tr><td><label for="Delegacion">Delegacion:</label></td>
        <td><input type="text" name="Delegacion" value="<?php print $data["Delegacion"]; ?>"></td>
      </tr>
      <tr><td><label for="Colonia">Colonia:</label></td>
        <td><input type="text" name="Colonia" value="<?php print $data["Colonia"]; ?>"></td>
      </tr>
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  <a href='<?php print RUTA_APP."secundarias/"; ?>'>Regresar</a>
</body>
</html>