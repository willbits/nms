<?php


class ConnectionSql 
{
    public $salida = array() ;
       
    public function datos($database){

        $servername = "localhost";
        $username = "nmspro";
        $password = "Pv8hAdtp";
        $dbname = $database;
        
        // ESTO CREA LA CONEXION
        $conn = new mysqli($servername, $username, $password, $dbname);
        // CHEQUEA LA CONEXION
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        
         // GUARDA LOS DATOS INTRODUCIDOS EN INPUT
                
                $result = $conn->query($this->data);
                $conn->close();
                if(!is_null($result)){
                // SALIDA DE DATOS POR CADA FILA ENCONTRADA

                if ($result->num_rows > 0) {
    
                    //GUARDAR LOS DATOS EN UN ARREGLO
                    while($row = mysqli_fetch_array($result)) {
                       $this->salida [] = $row;
                    }

                    return $this->salida;

                } else {
                
                        return false;
                }

                }
        
        
        
        
    }
    

}
?>