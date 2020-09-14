
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
                    

            case   'view_message';
            include "./includes/view_message.php";
            break ;

            case  'reply_message';
            include "./includes/reply_message.php";
            break ;

            default :
            include "./includes/view_all_message.php";
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
