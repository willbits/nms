<?php
	require_once('../../modelo/modelo.php');
	class words extends ConnectionSql
	{
		
		public function traer_words()
		{
			
			$this->data = "SELECT * FROM palabras";
			return $this->data;
		}

		public function traer_words1($id){
			$this->data = "SELECT * FROM palabras WHERE palabras.id = '$id'";
			return $this->data;
		}

		public function traer_img(){
			$this->data = "SELECT * FROM carrucel";
			return $this->data;
		}

		public function registrar($dir,$tabla)
   		{
   				include "language_1.php";			
   				$servername = "localhost";
        		$username = "nmspro";
        		$password = "Pv8hAdtp";
       			$dbname = "nmspro_nms";
        		// ESTO CREA LA CONEXION
        		$conn = new mysqli($servername, $username, $password, $dbname);
				$query1 = "INSERT INTO $tabla (`img`) VALUES ('".$dir."')";
				$result = $conn->query($query1);
                $conn->close();
  		}

  		public function actualizar($dir,$t_sect)
		{
		if (isset($_GET['id'])) $this->id = $_GET['id'];
		
			include "language_1.php";
			$servername = "localhost";
        	$username = "nmspro";
        	$password = "Pv8hAdtp";
       		$dbname = "nmspro_nms";
        
        // ESTO CREA LA CONEXION
        	$conn = new mysqli($servername, $username, $password, $dbname);
			
			$this->data = "UPDATE $t_sect   SET img = '$dir' WHERE $t_sect.id = '$this->id' ";
			$result = $conn->query($this->data);
              	$conn->close();
		}

		public function actualizar_words()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			if(isset($_POST['palabra'])) 
				include "language_1.php";
				$servername = "localhost";
        		$username = "nmspro";
        		$password = "Pv8hAdtp";
       			$dbname = $base;
        
        // ESTO CREA LA CONEXION
        		$conn = new mysqli($servername, $username, $password, $dbname);
				$this->titu = $_POST['palabra'];
				$this->descp = $_POST['descripcion'];
				$this->data = "UPDATE palabras   SET palabra = '$this->titu', descripcion = '$this->descp' WHERE palabras.id = '$this->id' ";
				$result = $conn->query($this->data);
                $conn->close();
		}
	}
?>