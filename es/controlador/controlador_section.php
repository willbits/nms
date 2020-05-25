<?php
	
	require_once('../../modelo/modelo.php');

class Section extends ConnectionSql
{
	
	public function traer_seccion($t_sect)
		{
			$this->data = "SELECT * FROM $t_sect ";
			return $this->data;
		}

	public function traer_sect()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			if (isset($_GET['td'])) $this->t_sect = $_GET['td'];
			$this->data = "SELECT * FROM $this->t_sect WHERE $this->t_sect.id = '$this->id'";
			return $this->data;
		}

	public function registrar($t_sect,$titu,$descp)
   	{
   		include "language_1.php";
   		$servername = "localhost";
        $username = "nmspro";
        $password = "Pv8hAdtp";
       	$dbname = $base;
        // ESTO CREA LA CONEXION
        $conn = new mysqli($servername, $username, $password, $dbname);
		$query1 = "INSERT INTO $t_sect (`titulo_s`,`descripcion`,`img`,`video`) VALUES ('".$titu."','".$descp."','','')";
		$result = $conn->query($query1);
        $conn->close();
  	}

  	public function actualiza($dir,$t_sect)
		{
		if (isset($_GET['id'])) $this->id = $_GET['id'];
		
			include "language_1.php";
			$servername = "localhost";
        	$username = "nmspro";
        	$password = "Pv8hAdtp";
       		$dbname = $base;
        
        // ESTO CREA LA CONEXION
        	$conn = new mysqli($servername, $username, $password, $dbname);
			
			$this->data = "UPDATE $t_sect   SET img = '$dir' WHERE $t_sect.id = '$this->id' ";
			$result = $conn->query($this->data);
              	$conn->close();
		}

	public function actualiza_text($t_sect,$titu,$descp)
		{
		if (isset($_GET['id'])) $this->id = $_GET['id'];
			
			include "language_1.php";
			$servername = "localhost";
        	$username = "nmspro";
        	$password = "Pv8hAdtp";
       		$dbname = $base;
        
        // ESTO CREA LA CONEXION
        	$conn = new mysqli($servername, $username, $password, $dbname);
			
			$this->data = "UPDATE $t_sect   SET titulo_s = '$titu', descripcion = '$descp' WHERE $t_sect.id = '$this->id' ";
			$result = $conn->query($this->data);
              	$conn->close();
		}

	public function actualiza_video($dir,$t_sect)
		{
		if (isset($_GET['id'])) $this->id = $_GET['id'];
			
			include "language_1.php";
			$servername = "localhost";
        	$username = "nmspro";
        	$password = "Pv8hAdtp";
       		$dbname = $base;
        
        // ESTO CREA LA CONEXION
        	$conn = new mysqli($servername, $username, $password, $dbname);
			
			$this->data = "UPDATE $t_sect   SET video = '$dir' WHERE $t_sect.id = '$this->id' ";
			$result = $conn->query($this->data);
              	$conn->close();
		}
}

	



?>