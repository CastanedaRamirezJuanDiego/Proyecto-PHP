<?php
include ('../../DB/conexion.php'); 
 //$request = ($_POST);

    $Nombreproducto = $_POST["Nombreproducto"];
    $Precio = $_POST["Precio"];
    $descripcion = $_POST["descripcion"];


 $sqlquery = "INSERT INTO producto ( Nombreproducto, Precio, descripcion) 
 VALUES ('".$Nombreproducto."', '".$Precio."','".$descripcion."')";
 
 $result = mysqli_query($conexion,$sqlquery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
 if($result == 1){
    echo "La direccion se dio de alta de manera existos";
 }else{
    echo"ocurrio un error al realizar el registro";
 }
    class Adresses{

        // Connection
        private $conn;
        // Table
        private $db_table = "negocio";
        // Columns
        public  $Nombreproducto;
        public  $Precio;
        public  $descripcion;
          
        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getAdresess(){
            $sqlQuery = "SELECT Nombreproducto, Precio, descripcion FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createEmployee($request ){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                    Nombreproducto = :Nombreproducto
                    Precio = :Precio
                    descripcion = :descripcion
                   ";




        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize

  
            $this->Nombreproducto=htmlspecialchars(strip_tags($this->Nombreproducto));
            $this->Precio=htmlspecialchars(strip_tags($this->Precio));
            $this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
    
        
         
        
            // bind data
            $stmt->bindParam(":Nombreproducto", $this->Nombreproducto);
            $stmt->bindParam(":Precio", $this->Precio);
            $stmt->bindParam(":descripcion", $this->descripcion);
    
          




         
        
            if($stmt->execute()){
                echo 'Employee created successfully.';
             }
                echo 'Employee could not be created.';
            }
        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
                       Nombreproducto,
                       Precio,
                       descripcion
                      


                      FROM
                        ". $this->db_table ."
                    WHERE 
                    Nombreproducto = ?
                    ";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->nomnegocio = $dataRow['Nombreproducto'];
            $this->horario_abierto = $dataRow['Precio'];
            $this->horario_cerrado = $dataRow['descripcion'];

        
        }        
        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    Nombreproducto = :Nombreproducto
                    Precio = :Precio
                    descripcion = :descripcion
                   ;
                   
                    WHERE 
                    Nombreproducto = :Nombreproducto";
        
            $stmt = $this->conn->prepare($sqlQuery);
        

            
            $this->Nombreproducto=htmlspecialchars(strip_tags($this->Nombreproducto));
            $this->Precio=htmlspecialchars(strip_tags($this->Precio));
            $this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
        
        

         
        
            // bind data
            $stmt->bindParam(":Nombreproducto", $this->Nombreproducto);
            $stmt->bindParam(":Precio", $this->Precio);
            $stmt->bindParam(":descripcion", $this->descripcion);
        


        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteEmployee(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE Nombreproducto = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  

?>