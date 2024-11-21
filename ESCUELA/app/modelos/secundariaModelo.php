<?php
/**
 * LibrosModelo.php     
 * 	capa modelo contiene a la interfaz <$db> para gestionar 
 * 	las operaciones de lectura/escritura/eleminación de un recordSet
 * 	de una tabla en base de datos.
 * LibrosModelo.php contiene:
 * 	i)Define una interfaz para gestionar consultas a una base de datos.
 * 	Mediante una consulta selectiva <querySelect()> se tiene que:
 * 	ii) getLibros() retorna un arreglo de una colección de recordSet
 *      retorna todos los elementos de la tabla.
 * 	iii)getLibro() retorna un arreglo de UN recorSet.
 * 	Mediante una consulta NO selectiva  <queryNoSelect()> 
     se tiene que:
 * 	iv) insertarLibros() inserta un recorSet y de ser verdadero muestra el dashBoard
 * 	v) modificarLibros() actualiza un recordSet y de ser verdadero muestra el dashBoard
 * 	vi) borrarLibro() eleimina un recorSet y de ser verdadero muestra el dashBoard.  
 */
class secundariaModelo
{
  private $db;
  /*retorna una interfaz para gestionar operaciones de 
  directivas con bases de datos*/
  function __construct()
  {
    $this->db=new MySQLdb();//define interfaz para gestionar php-base de datos
  }
	/*retorna un arreglo de todos los elementos tipo recordSet 
	de la tabla libros*/
  public function getsecundarias()
  {
    $data = $this->db->querySelect("SELECT * FROM secundarias");
    return $data;
  }
	/*retorna UN recordSet de la tabla libro*/
  public function getsecundaria($id)
  {
    $data = $this->db->querySelect("SELECT * FROM secundarias WHERE id=".$id);
    return $data;
  }
	/*inserta un recorSet a la tabla libros*/
  public function insertarsecundarias($Nombre, $Delegacion, $Colonia)
  { 
		/*confecciona una consulta de inserción de un recorSet*/
    $sql = "INSERT INTO secundarias (id,Nombre,Delegacion,Colonia) VALUES(0,";//0:autoincrementa ID
    $sql.= "'".$Nombre."', ";
    $sql.= "'".$Delegacion."', ";
    $sql.= "'".$Colonia."')";
	
		/*ejecuta una sentencia de inserción*/
    if ($this->db->queryNoSelect($sql))
	{
		/*muestra dashBoar*/
      header("location:".RUTA_APP."secundarias");
      exit();
    } else 
	{
      exit("Error al insertar los datos del secundaria");
    }
  }
	/*realiza una actualización de un recorSet a 
	una tabla de libros, mediante una consulta*/
  public function modificarsecundarias($id, $Nombre, $Delegacion, $Colonia)
  {
	  /*confecciona la sentencia de actualización*/
    $sql = "UPDATE secundarias SET ";
    $sql.= "Nombre='".$Nombre."', ";
    $sql.= "Delegacion='".$Delegacion."', ";
    $sql.= "Colonia='".$Colonia."' ";
    $sql.= "WHERE id=".$id;
	
		/*ejecuta una sentencia de actualización*/
    if ($this->db->queryNoSelect($sql))
		{
		/*muestra el dashBoard*/
		header("location:".RUTA_APP."secundarias");
		exit();
		} 
	else
		{
      exit("Error al modificar los datos del secundaria");
    }
  }
	/*borra un registro seleccionado $id mediante una
   	  consulta no selectiva*/
  public function borrarsecundarias($id)
  {
	  /*confecciona una sentecia para borrar un registro
	   y ejecuta la sentencia*/
    $sql = "DELETE FROM secundarias ";
    $sql.= "WHERE id=".$id;
		/*ejecuta la sentencia de eliminación de registro*/
    if ($this->db->queryNoSelect($sql)) 
	{ /*muestra dashBoard*/
      header("location:".RUTA_APP."secundarias");
      exit();
    } 
	else
	{
      exit("Error al borrar el secundaria");
    }
  }
}
?>