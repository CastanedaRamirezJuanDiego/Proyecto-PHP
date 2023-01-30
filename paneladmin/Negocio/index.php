<?php
include_once ('../Config.php');
include_once('../test.php');
?>
<?php 
include ('../layouts/header.php'); 
include ('../layouts/siderbar.php');

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">
              <!-- DataTales Example -->
             
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Usuarios compras</h6>
      
    </div>
    <div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" 
    aria-controls="dataTable"></label></div><a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg><i
                                class=""></i> insertar</a>
                                <a href="edit.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
  <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
</svg><i
                                class=""></i> Modificar</a>
                                
                                
                                
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
       <div>         </div>                
    </div>
</div>
</div>
 
               

    <?php
include('../layouts/scripts.php');
include('../layouts/footer.php');
?>
  

  