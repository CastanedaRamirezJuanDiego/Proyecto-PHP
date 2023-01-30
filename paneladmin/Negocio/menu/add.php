<?php
include_once ('../../Config.php');
include_once('../../test.php');
?>
<?php 
include ('../../layouts/header.php'); 
include ('../../layouts/siderbar.php');
?>
 <!-- Begin Page Content -->
 <div class="container-fluid">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
        <form action="../../class/agregarmenu.php" method="post">
                        <div class="mb-3 d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Agregar producto</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Nombre del producto</label>
                                <input type="text" name='Nombreproducto' id="form3Example1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Precio</label>
                                <input type="text" name='Precio' id="form3Example2" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Descripcion</label>
                                <input type="price" name='descripcion'  id="form3Example1" class="form-control">
                                </div>
                            </div>
                           
                            </div>
                        </div>
                        <input type="submit" value="Registrar" class="btn">
                      
                        </div>
                    
                    </form>
                
        </div>
                   
    </div>
  
  <!-- End of Main Content -->

  <!-- Begin Page Content -->
 <div class="container-fluid">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
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
                        <th>Nombre de producto</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de producto</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
$conexion=mysqli_connect('localhost','root','','usendfood');
?>

                <?php
             
$sql="SELECT * FROM producto";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $mostrar['id_Producto'] ?></td>
                        <td><?php echo $mostrar['Nombreproducto'] ?></td>
                        <td><?php echo $mostrar['Precio'] ?></td>
                        <td><?php echo $mostrar['descripcion'] ?></td>
                      
                    </tr>
                    <?php

}?>
                    <tr>
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
                     
                      
                    </tr>
                    <tr>
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
                   
                      
                    </tr>
                    <tr>
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
                     
                     
                    </tr>
                    <tr>
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
                      
                     
                    </tr>


                    
                </tbody>
            </table>
        </div>
        <a href="edit.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="icon text-gray-600"></i> modificar</a>
                               
    </div>
</div>
  <!-- End of Main Content -->
  


  <?php
include('../../layouts/scripts.php');
include('../../layouts/footer.php');
?>
  