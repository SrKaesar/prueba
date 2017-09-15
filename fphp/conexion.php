<?php 

/********************************* ATENCION *********************************/
// Esta hoja fue creada con la finalidad de establecer una sola conexion 	*
// desde la cual se realizaran todas las consultas en general a la base 	*
// de datos... 																*
//																			*
// Informacion Adicional: Si se desea establecer acceso a alguna base de 	*
// datos en particular dentro de una red o un servidor; en la variable 		*
// <<$host>> se puede ingresar la direccion IP del servidor destino, 		*
// y tambien un puerto si se desea. 										*
/****************************************************************************/

class Conexion {

	private $conexion;

	public function __construct($host, $baseDeDatos, $usuario, $contrasena) {
		//$this->conexion = new PDO("sqlsrv:Server=".$host.";Database=".$baseDeDatos, $usuario, $contrasena);
		$this->conexion = new PDO('mysql:host='.$host.';dbname='.$baseDeDatos, $usuario, $contrasena);
	}

	public function ejecutarSQL($sql) {
		return $this->conexion->query($sql);
	}

	public function getCiudades() {
		$consulta = $this->conexion->query("SELECT * FROM city");
		return ($consulta->rowCount() ? $consulta : false);
	}

	public function getRepresentantesVentas($telefono, $representante, $tipo_usuario, $ciudad) {
		
		$condicion = "";

		if(is_null($telefono)) {
			$condicion .= ", ".$telefono;
		}

		if(is_null($representante)) {
			$condicion .= ", ".$representante;
		}

		if(is_null($tipo_usuario)) {
			$condicion .= ", ".$tipo_usuario;
		}

		if(is_null($ciudad)) {
			$condicion .= ", ".$ciudad;
		}

		if(!empty($condicion)) {
			$condicion = " WHERE ".(substr($condicion, 2));
	}
}

	public function getTipificaciones() {
		$consulta = $this->conexion->query("SELECT * FROM tipificacion");
		return ($consulta->rowCount() ? $consulta : false);
	}
}

$usuario = 'root';
$contrasena = '';
$host = 'localhost';
$baseDeDatos = 'ic';

$conexion = new Conexion($host, $baseDeDatos, $usuario, $contrasena);

 ?>