
<?php include "includes/header.php"; ?>
  
  

  <div id="page-wrapper">

      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
              <div class="col-lg-12">


                  <h1 class="page-header">
                     Welcome to Travello
                     <small><?php  echo  $_SESSION ['username'] ; ?></small>
                  </h1>
         <?php   if(isset($_GET['source'])){

                $source = $_GET['source'];
            }else{
        
                $source  ='';
            }

            switch($source){
                

        case   'view_booking';
        include "./includes/view_booking.php";
        break ;

        default :
        include "./includes/view_all_booking.php";
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
