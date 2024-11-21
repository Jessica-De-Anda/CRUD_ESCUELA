   <?php
/**
 * Libros
 */
class secundarias extends Controlador
{
  private $modelo;
  /*define un objeto para acceder a los métodos definidos 
	en class LibrosModelo() */
  function __construct()
  {
    $this->modelo=$this->modelo("secundariaModelo");
  }
	/*retorna de la tabla libros un arreglo de todos los recordSet 
	y renderiza éstos en el dashBoard*/
  public function index()
  {
    $data=$this->modelo->getsecundarias();
    /*renderiza en el dashBoard los datos del recordSet*/
    $this->vista("secundariasVista",$data);
  }

	/* se realiza una petición de envio de un arreglo de  
	datos, generada por un <submit> vía POST.
	verifica que variables están pasadas por el método POST
		determina si la variable está definida y la asigna, 
		si no asigna un campo vacío.
	*/
  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST")
		{
		/*recolecta atributos de un registro $id*/
		  $id = isset($_POST["id"])?$_POST["id"]:"";
		  $Nombre = isset($_POST["Nombre"])?$_POST["Nombre"]:"";
		  $Delegacion = isset($_POST["Delegacion"])?$_POST["Delegacion"]:"";
		  $Colonia = isset($_POST["Colonia"])?$_POST["Colonia"]:"";
		/* asigna y actualiza los atributos de un registro id seleccionado*/
		  $this->modelo->modificarsecundarias($id, $Nombre, $Delegacion, $Colonia);
		} 
	else 
		{
			$data = $this->modelo->getsecundarias($id);
			$datos = [
				"id" => $id,
				"Nombre" => $data[0]["Nombre"],
				"Delegacion" => $data[0]["Delegacion"],
				"Colonia" => $data[0]["Colonia"]
				];
			$this->vista("secundariasModificar",$datos);
    }
  }
	/*retorna y muestra recorSet seleccionado. 
	elimina un registro de la base de datos
	cuando se presiona el boton sumit <Enviar>*/
  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST")
   { 
	/*verifica la existencia de un identificador*/
      $id = isset($_POST["id"])?$_POST["id"]:"";
	/*invoca la ejecución de eliminar un registro*/
      $this->modelo->borrarsecundarias($id);
    }
		/*retorna y muestra recordSet seleccionado*/
	else 
	{
		//print("muestra");
		/*retorna recorSet seleccionado por id*/
      $data=$this->modelo->getsecundaria($id);
		/*indexa en cero, elimina recorSet seleccionado*/
      $datos=[
        "id"=>$id,
        "Nombre"=>$data[0]["Nombre"],
        "Delegacion"=>$data[0]["Delegacion"],
        "Colonia"=>$data[0]["Colonia"]
      ];
	  /*actualiza vista y muestra dashboard*/
      $this->vista("secundariasBorrar",$datos);
    }
  }

  public function alta()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST")
	{
      $Nombre = isset($_POST["Nombre"])?$_POST["Nombre"]:"";
      $Delegacion = isset($_POST["Delegacion"])?$_POST["Delegacion"]:"";
      $Colonia = isset($_POST["Colonia"])?$_POST["Colonia"]:"";

      $this->modelo->insertarsecundarias($Nombre, $Delegacion, $Colonia);

    } else {
      $this->vista("secundariasAlta");
    }
  }
}
?>