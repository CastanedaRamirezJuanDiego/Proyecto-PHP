
<?php 
include ('layouts/header.php'); 
include ('layouts/siderbar.php');

?>


                <!-- Begin Page Content -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Publicidad</h6>
                        <a href="https://portafolio.tecgurus.net"><img width="300" height="285" 
                            src="https://www.programaenlinea.net/wp-content/uploads/2021/07/ads-sidebar2-300x285.png" 
                            class="image wp-image-11262  attachment-medium size-medium" alt="" loading="lazy" 
                            style="max-width: 100%; height: auto;" 
                            srcset="https://www.programaenlinea.net/wp-content/uploads/2021/07/ads-sidebar2-300x285.png 300w, https://www.programaenlinea.net/wp-content/uploads/2021/07/ads-sidebar2.png 370w" 
                            sizes="(max-width: 300px) 100vw, 300px"></a>

                            <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control .bg-gradient-primary border-0 small" placeholder="URL"
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class=""></i>
                                    </button>
                                </div>
                            </div>
                           </form>
                    </div>



                <!-- End of Main Content -->

               
   
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
include('layouts/scripts.php');
include('layouts/footer.php');
?>
  
