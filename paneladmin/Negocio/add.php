<?php
include_once ('../Config.php');
include_once('../test.php');
?>
<?php 
include ('../layouts/header.php'); 
include ('../layouts/siderbar.php');

?>

<?php 
   $conexion=mysqli_connect('localhost','root','','usendfood');
    $sql="SELECT *  FROM negocio";
    $query=mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);
?>


 <!-- Begin Page Content -->
 <div class="container-fluid">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>

<form action="../class/agregarnegocio.php" method="post" style="width:35%;margin:0 auto;">

    <fieldset>
        
        <legend class="text-center header text-success">Insertar Negocio</legend>
        <div class="form-group">

            <label for="nom">Nombre</label>
            <input type="text" class="form-control" name="nomnegocio">
            

        </div>
        <div class="form-group">

            <label for="nom">Horario de </label>
            <input type="text" class="form-control" name="horario_abierto">
            <input type="text" class="form-control" name="horario_cerrado">

        </div>

        <div class="form-group">

            <label for="email">Correo:</label>
            <input type="text" class="form-control" name="correoN">
            
        
            <div class="form-group">

<label for="email">Contraseña:</label>
<input type="password" class="form-control" name="Constraseña">

</div>


    <div class="form-group">

        
    <input type="submit" value="Registrar" class="btn">
        

    </div>

</fieldset>


</form>



</div>
    

 <!-- Begin Page Content -->
 <div class="container-fluid">
              <!-- DataTales Example -->
             
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Usuarios compras</h6>
      
    </div>
    <div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" 
    aria-controls="dataTable"></label></div></div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        
                                
                    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de negocio</th>
                        <th>Abre</th>
                        <th>Cierra</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de negocio</th>
                        <th>Abre</th>
                        <th>Cierra</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                       
                    </tr>
                </tfoot>
                <tbody>
                    
                <?php
$conexion=mysqli_connect('localhost','root','','usendfood');
?>

                <?php
             
$sql="SELECT * FROM negocio";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $mostrar['id_negocio'] ?></td>
                        <td><?php echo $mostrar['nomnegocio'] ?></td>
                        <td><?php echo $mostrar['horario_abierto'] ?></td>
                        <td><?php echo $mostrar['horario_cerrado'] ?></td>
                        <td><?php echo $mostrar['correoN'] ?></td>
                        <td><?php echo $mostrar['Constraseña'] ?></td>
                        
                    </tr>
                    <?php

}?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>   
                </tbody>
            </table>
        </div>
            
    </div>
</div>
</div>
 









<?php
include('../layouts/scripts.php');
include('../layouts/footer.php');
?>
  

  
  <!-- End of Main Content -->