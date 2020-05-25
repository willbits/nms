<?php
class conexion
{

       private $conexion;
	   private $server = "localhost";
	   private $usuario = "nmspro";
	   private $pass = "Pv8hAdtp";
	   private $db = "nmspro_nms";
	  
	   
   
   public function __construct()
   {
   		$this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);
		if($this->conexion->connect_errno)
   		{   
    		die("fallo al tratar de conectar con MYSQL: (".$this->conexion->connect_errno).")";
   		}
   	}
   
   	public function cerrar()
	{
    	$this->conexion->close();
	}
   
   public function crear_tabla()
   {
		$query = "CREATE TABLE IF NOT EXISTS `noti_e` (
			`id` int(11) NOT NULL,
			`titulo_e` varchar(100) NOT NULL,
			`noticia` varchar(300) NOT NULL,
			`imagen` varchar(30) NOT NULL,
			PRIMARY KEY (`id`))";

		$consulta = $this->conexion->query($query);
    	}
	public function registrar($titu,$noti)
   	{
   		if(isset($_GET['id'])) $this->id = $_GET['id'];

		$query1 = "INSERT INTO `usuario` (`id`,`titulo_e`,`noticia`,`imagen`) VALUES ('".$this->id."','".$titu."','".$noti."','')";
		$consulta = $this->conexion->query($query1);
    }
}

/*04144362318*/
?>