
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

                 case 'edit_user';
                 include "./includes/edit_user.php ";
                 break;

                 
                 case 'add_user';
                 include "./includes/add_user.php ";
                 break;


                 default :
                 include "./includes/view_all_user.php ";
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
