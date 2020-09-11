
<?php include "includes/header.php"; ?>
  
  <div id="wrapper">

      <div id="page-wrapper">

          <div class="container-fluid">

              <!-- Page Heading -->
              <div class="row">
                  <div class="col-lg-12">


                      <h1 class="page-header">
                         Welcome to Admin
                         <small><?php  echo  $_SESSION ['username'] ; ?></small>
                      </h1>
             <?php   if(isset($_GET['source'])){

                    $source = $_GET['source'];
                }else{
            
                    $source  ='';
                }

                switch($source){

                 default :
                 include "./includes/view_norm_user.php ";
                 break ;

           }
              ?>
                   

                     </div>
              <!-- /.row -->

          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->

      <?php include "includes/footer.php"; ?>
