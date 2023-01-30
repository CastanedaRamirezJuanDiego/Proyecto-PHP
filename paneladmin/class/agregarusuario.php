<?php
include ('../../DB/conexion.php'); 
 //$request = ($_POST);



    class Adresses{

        // Connection
        private $conn;
        // Table
        private $db_table = "cliente";
        // Columns
        public  $Nombre;
        public  $ApellidoP;
        public  $ApellidoM;
        public  $Correo;
        public  $Contraseña;
        public  $Telefono;
          
        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getAdresess(){
            $sqlQuery = "SELECT Nombre, ApellidoP, ApellidoM,Correo,Contraseña,Telefono FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createEmployee($request ){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                    Nombre = :Nombre
                    ApellidoP = :ApellidoP
                    ApellidoM = :ApellidoM
                    Correo = :Correo
                    Contraseña = :Contraseña
                    Telefono = :Telefono" ;




        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize

  
            $this->Nombre=htmlspecialchars(strip_tags($this->Nombre));
            $this->ApellidoP=htmlspecialchars(strip_tags($this->ApellidoP));
            $this->ApellidoM=htmlspecialchars(strip_tags($this->ApellidoM));
            $this->Correo=htmlspecialchars(strip_tags($this->Correo));
            $this->Contraseña=htmlspecialchars(strip_tags($this->Contraseña));
            $this->Telefono=htmlspecialchars(strip_tags($this->Telefono));

         
        
            // bind data
            $stmt->bindParam(":Nombre", $this->Nombre);
            $stmt->bindParam(":ApellidoP", $this->ApellidoP);
            $stmt->bindParam(":ApellidoM", $this->ApellidoM);
            $stmt->bindParam(":Correo", $this->Correo);
            $stmt->bindParam(":Contraseña", $this->Contraseña);
            $stmt->bindParam(":Telefono", $this->Telefono);




         
        
            if($stmt->execute()){
                echo 'Employee created successfully.';
             }
                echo 'Employee could not be created.';
            }
        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
                       Nombre,
ApellidoP,
ApellidoM,
Correo,
Contraseña,
Telefono

                      FROM
                        ". $this->db_table ."
                    WHERE 
                    Nombre = ?
                    ";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->Nombre = $dataRow['Nombre'];
            $this->ApellidoP = $dataRow['ApellidoP'];
            $this->ApellidoM = $dataRow['ApellidoM'];
            $this->Correo = $dataRow['Correo'];
            $this->Contraseña = $dataRow['Contraseña'];
            $this->Telefono = $dataRow['Telefono'];
        }        
        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    Nombre = :Nombre
                    ApellidoP = :ApellidoP
                    ApellidoM = :ApellidoM
                    Correo = :Correo
                    Contraseña = :Contraseña
                    Telefono = :Telefono ;
                    WHERE 
                        Nombre = :Nombre";
        
            $stmt = $this->conn->prepare($sqlQuery);
        

            
            $this->Nombre=htmlspecialchars(strip_tags($this->Nombre));
            $this->ApellidoP=htmlspecialchars(strip_tags($this->ApellidoP));
            $this->ApellidoM=htmlspecialchars(strip_tags($this->ApellidoM));
            $this->Correo=htmlspecialchars(strip_tags($this->Correo));
            $this->Contraseña=htmlspecialchars(strip_tags($this->Contraseña));
            $this->Telefono=htmlspecialchars(strip_tags($this->Telefono));

         
        
            // bind data
            $stmt->bindParam(":Nombre", $this->Nombre);
            $stmt->bindParam(":ApellidoP", $this->ApellidoP);
            $stmt->bindParam(":ApellidoM", $this->ApellidoM);
            $stmt->bindParam(":Correo", $this->Correo);
            $stmt->bindParam(":Contraseña", $this->Contraseña);
            $stmt->bindParam(":Telefono", $this->Telefono);


        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteEmployee(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE Nombre = ?";
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