<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta una escuela</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."secundarias/borrar/"; ?>' method="POST">
    <table>
      <tr><td><label for="Nombre">Nombre:</label></td>
        <td><input type="text" name="Nombre" disabled="disabled" value="<?php print $data["Nombre"]; ?>"></td>
      </tr>
      <tr><td><label for="Delegacion">Delegacion:</label></td>
        <td><input type="text" name="Delegacion" disabled="disabled" value="<?php print $data["Delegacion"]; ?>"></td>
      </tr>
      <tr><td><label for="Colonia">Colonia:</label></td>
        <td><input type="text" name="Colonia" disabled="disabled" value="<?php print $data["Colonia"]; ?>"></td>
      </tr>
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
    <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
  </form>
  <a href='<?php print RUTA_APP."secundarias/"; ?>'>Regresar</a>
</body>
</html>