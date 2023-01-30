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
        <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
        <form action="../class/agregarusuario.php" method="post">
                        <div class="mb-3 d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Estudiante</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Nombre</label>
                                <input type="text"  name='Nombre' id="form3Example1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Apellido Paterno</label>
                                <input type="text" name= 'ApellidoP' id="form3Example2" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Apellido Materno</label>
                                <input type="text" name='ApellidoM' id="form3Example1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Correo</label>
                                <input type="email" name='Correo'id="form3Example2" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Contraseña</label>
                                <input type="password" name='Contraseña' id="form3Example1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Telefono</label>
                                <input type="number" name='Telefono'id="form3Example2" class="form-control">
                                </div>
                            </div>
                            <input type="submit" value="Continuar" class="btn">
                        </div>

                    </form>
        </div>
        
 
        </div>
        </div></div>




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
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th> 
                        <th>Contraseña</th> 
                        <th>Telefono</th>
            
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th> 
                        <th>Contraseña</th> 
                        <th>Telefono</th>
                    </tr>
                </tfoot>
                <tbody>

                <?php
$conexion=mysqli_connect('localhost','root','','usendfood');

?>

                <?php
             
$sql="SELECT * FROM cliente";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $mostrar['ID'] ?></td>
                        <td><?php echo $mostrar['Nombre'] ?></td>
                        <td><?php echo $mostrar['ApellidoP'] ?></td>
                        <td><?php echo $mostrar['ApellidoM'] ?></td>
                        <td><?php echo $mostrar['Correo'] ?></td>
                        <td type="password"><?php echo $mostrar['Contraseña'] ?></td>
                        <td><?php echo $mostrar['Telefono'] ?></td>
                        
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
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
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
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
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
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
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
                        <td></td>
                    </tr>


                    
                </tbody>
            </table>
        </div>
                               
                                        

    </div>
</div>
</div>
</div>

                <!-- End of Main Content -->



                <?php
include('../layouts/scripts.php');
include('../layouts/footer.php');
?>
  

  