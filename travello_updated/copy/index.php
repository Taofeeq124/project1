
<?php include "./includes/header.php" ?>


<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Welcome to Travello
               <small><?php  echo  $_SESSION ['username'] ; ?></small>
            </h1>
            <ol class="breadcrumb">
                 <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                </li> 
                
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->




 <?php include "./includes/footer.php" ?>
