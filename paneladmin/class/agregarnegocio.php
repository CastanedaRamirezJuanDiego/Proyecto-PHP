<?php
include ('../../DB/conexion.php'); 
 //$request = ($_POST);

 $nomnegocio = $_POST["nomnegocio"];
 $horario_abierto = $_POST["horario_abierto"];
 $horario_cerrado = $_POST["horario_cerrado"];
 $correoN = $_POST["correoN"];
 $Constraseña = md5($_POST["Constraseña"]);


 $sqlquery = "INSERT INTO negocio (nomnegocio, horario_abierto, horario_cerrado, correoN, Constraseña) 
 VALUES ('".$nomnegocio."', '".$horario_abierto."','".$horario_cerrado."','".$correoN."','".$Constraseña."')";
 
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
        public  $nomnegocio;
        public  $horario_abierto;
        public  $horario_cerrado;
        public  $correoN;
        public  $Constraseña;
          
        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getAdresess(){
            $sqlQuery = "SELECT nomnegocio, horario_abierto, horario_cerrado,correoN,Constraseña FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createEmployee($request ){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                    nomnegocio = :nomnegocio
                    horario_abierto = :horario_abierto
                    horario_cerrado = :horario_cerrado
                    correoN = :correoN
                    Constraseña = :Constraseña" ;




        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize

  
            $this->nomnegocio=htmlspecialchars(strip_tags($this->nomnegocio));
            $this->horario_abierto=htmlspecialchars(strip_tags($this->horario_abierto));
            $this->horario_cerrado=htmlspecialchars(strip_tags($this->horario_cerrado));
            $this->correoN=htmlspecialchars(strip_tags($this->correoN));
            $this->Constraseña=htmlspecialchars(strip_tags($this->Constraseña));
        
         
        
            // bind data
            $stmt->bindParam(":nomnegocio", $this->nomnegocio);
            $stmt->bindParam(":horario_abierto", $this->horario_abierto);
            $stmt->bindParam(":horario_cerrado", $this->horario_cerrado);
            $stmt->bindParam(":correoN", $this->correoN);
            $stmt->bindParam(":Constraseña", $this->Constraseña);
          




         
        
            if($stmt->execute()){
                echo 'Employee created successfully.';
             }
                echo 'Employee could not be created.';
            }
        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
                       nomnegocio,
                       horario_abierto,
                       horario_cerrado,
                       correoN,
                       Constraseña


                      FROM
                        ". $this->db_table ."
                    WHERE 
                    nomnegocio = ?
                    ";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->nomnegocio = $dataRow['nomnegocio'];
            $this->horario_abierto = $dataRow['horario_abierto'];
            $this->horario_cerrado = $dataRow['horario_cerrado'];
            $this->correoN = $dataRow['correoN'];
            $this->Constraseña = $dataRow['Constraseña'];
        
        }        
        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    nomnegocio = :nomnegocio
                    horario_abierto = :horario_abierto
                    horario_cerrado = :horario_cerrado
                    correoN = :correoN
                    Constraseña = :Constraseña;
                   
                    WHERE 
                    nomnegocio = :nomnegocio";
        
            $stmt = $this->conn->prepare($sqlQuery);
        

            
            $this->nomnegocio=htmlspecialchars(strip_tags($this->nomnegocio));
            $this->horario_abierto=htmlspecialchars(strip_tags($this->horario_abierto));
            $this->horario_cerrado=htmlspecialchars(strip_tags($this->horario_cerrado));
            $this->correoN=htmlspecialchars(strip_tags($this->correoN));
            $this->Constraseña=htmlspecialchars(strip_tags($this->Constraseña));
        

         
        
            // bind data
            $stmt->bindParam(":nomnegocio", $this->nomnegocio);
            $stmt->bindParam(":horario_abierto", $this->horario_abierto);
            $stmt->bindParam(":horario_cerrado", $this->horario_cerrado);
            $stmt->bindParam(":correoN", $this->correoN);
            $stmt->bindParam(":Constraseña", $this->Constraseña);
        


        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteEmployee(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE nomnegocio = ?";
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