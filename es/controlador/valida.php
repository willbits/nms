<?php
	
	require_once('../../modelo/modelo.php');

	class Us_valida extends ConnectionSql
	{
		public $userid, $passw, $data, $databas, $tipo, $id, $buscar, $ape;
		
		public function usuario()
		{ 
			if (isset($_POST['idusuario']))     $this->userid = $_POST['idusuario'];
			
			
			$_SESSION=$this->userid;
			if (isset($_POST['password']))     	$this->passw = $_POST['password'];
			
			$this->data = "SELECT nombre,clave,cedula,user FROM usuarios WHERE user = '$this->userid' AND clave = '$this->passw'";
			
			return $this->data;
			
		}

		public function search()
		{
			if (isset($_GET['busqueda']))     $this->buscar = $_GET['busqueda'];
			$this->data = "SELECT * FROM registros WHERE lib_titu like '%$this->buscar%' OR lib_aut like '%$this->buscar%' OR lib_edit like '%$this->buscar%' OR lib_yr like '%$this->buscar%' OR lib_mat like '%$this->buscar' OR lib_isbn like '%$this->buscar%' ";
			return $this->data;
		}

		public function user($id)
		{
			$this->data = "SELECT * FROM usuarios INNER JOIN biografia ON usuarios.id = biografia.id WHERE usuarios.id = '$id'";
			return $this->data;
		}

		public function traer_datos()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			$this->data = "SELECT * FROM usuarios INNER JOIN biografia ON usuarios.id = biografia.id WHERE usuarios.id = '$this->id'";
			return $this->data;
		}

		

		public function traer_noti()
		{
			$this->data = "SELECT * FROM noti_g";
			return $this->data;
		}

		public function traer_noti1()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			$this->data = "SELECT * FROM noti_g WHERE noti_g.id = '$this->id'";
			return $this->data;
		}
		public function traer_noti2()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			$this->data = "SELECT * FROM noti_e WHERE noti_e.id = '$this->id'";
			return $this->data;
		}

		public function traer_words()
		{
			
			$this->data = "SELECT * FROM palabras";
			return $this->data;
		}

		public function traer_words1($id){
			$this->data = "SELECT * FROM palabras WHERE palabras.id = '$id'";
			return $this->data;
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

		public function actualizar_noti()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			if(isset($_POST['titulo'])) 
				include "language_1.php";
				$servername = "localhost";
        		$username = "nmspro";
        		$password = "Pv8hAdtp";
       			$dbname = $base;
        
        // ESTO CREA LA CONEXION
        		$conn = new mysqli($servername, $username, $password, $dbname);
				$this->titu = $_POST['titulo'];
				$this->descp = $_POST['descripcion'];
				$this->data = "UPDATE noti_g   SET titulo = '$this->titu', descripcion = '$this->descp' WHERE noti_g.id = '$this->id' ";
				$result = $conn->query($this->data);
                $conn->close();
		}

		public function actualizar_noti1()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			if(isset($_POST['titulo'])) 
				include "language_1.php";
				$servername = "localhost";
        		$username = "nmspro";
        		$password = "Pv8hAdtp";
       			$dbname = $base;
        
        // ESTO CREA LA CONEXION
        		$conn = new mysqli($servername, $username, $password, $dbname);
        		$this->ant = $_POST['ant_titulo'];
				$this->titu_e = $_POST['titulo'];
				$this->noti = $_POST['noticia'];
				$this->sumario = $_POST['sumario'];
				$this->autor = $_POST['autor'];
				$this->data = "UPDATE noticias   SET titulo = '$this->titu_e', noticia = '$this->noti', ant_titu = '$this->ant', sumario = '$this->sumario', autor = '$this->autor' WHERE noticias.id = '$this->id'";
				$result = $conn->query($this->data);
                $conn->close();
		}


		public function actualizar()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			if(isset($_POST['nombre'])) 
				include "language_1.php";
				$servername = "localhost";
        		$username = "nmspro";
        		$password = "Pv8hAdtp";
       			$dbname = $base;
        
        // ESTO CREA LA CONEXION
        		$conn = new mysqli($servername, $username, $password, $dbname);
				$this->nombre = $_POST['nombre'];
				$this->ape = $_POST['apellido'];
				$this->bio = $_POST['biografia'];
				$this->cargo = $_POST['cargo'];
				$this->data = "UPDATE usuarios INNER JOIN biografia ON usuarios.id = biografia.id  SET usuarios.nombre = '$this->nombre', usuarios.apellido = '$this->ape', biografia.biografia = '$this->bio', 	biografia.cargo = '$this->cargo' WHERE usuarios.id = '$this->id' ";
				$result = $conn->query($this->data);
                $conn->close();
		}



		public function registrar($ant,$titu,$suma,$noti,$autor)
   		{
   				include "language_1.php";			
   				$servername = "localhost";
        		$username = "nmspro";
        		$password = "Pv8hAdtp";
       			$dbname = $base;
        		// ESTO CREA LA CONEXION
        		$conn = new mysqli($servername, $username, $password, $dbname);
				$query1 = "INSERT INTO `noticias` (`ant_titu`,`titulo`,`sumario`,`autor`,`noticia`,`img`,`fecha`) VALUES ('".$ant."','".$titu."','".$suma."','".$autor."','".$noti."','',NOW())";
				$result = $conn->query($query1);
                $conn->close();
  		}

		public function eliminar($td)
		{
			if(isset($_GET['id'])) $this->id = $_GET['id'];
				include "language_1.php";
				$servername = "localhost";
        		$username = "nmspro";
        		$password = "Pv8hAdtp";
       			$dbname = $base;
        
        // ESTO CREA LA CONEXION
        		$conn = new mysqli($servername, $username, $password, $dbname);
        		$this->data = "DELETE  FROM $td WHERE $td.id= '$this->id'";
        		$result = $conn->query($this->data);
                $conn->close();
		}


	}
	

?>