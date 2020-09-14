<?php include "../includes/db.php" ?>
<?php ob_start() ;?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travello Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- jQuery -->
   <script src="js/jquery.js"></script>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                    
              
                        <li>
                            <a href="#"><i class="fa fa-fw fa-home"></i>Home Page</a>
                        </li>
                <li class="dropdown mr-5">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user mr-3"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user mr-2"></i> <?php echo $_SESSION['username']; ?> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="./includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <!-- <li>
                        <a href="charts.html"><i class="fa fa-fw fa-user"></i>Users</a>
                    </li> -->

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php?source=view_all_post">View all users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user">Add User</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demoplace"><i class="fa fa-fw fa-arrows-v"></i>Place<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demoplace" class="collapse">
                            <li>
                                <a href="place.php?source=view_all_place">View all Places</a>
                            </li>
                            <li>
                                <a href="place.php?source=add_place">Add Place</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demouser"><i class="fa fa-fw fa-arrows-v"></i>Normal Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demouser" class="collapse">
                            <li>
                                <a href="norm_user.php?source=view_norm_user">View General User</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demousermes"><i class="fa fa-fw fa-arrows-v"></i>Message<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demousermes" class="collapse">
                            <li>
                                <a href="message.php?source=view_all_message">View all Messages</a>
                            </li>

                            
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#booking"><i class="fa fa-fw fa-arrows-v"></i>Booking<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="booking" class="collapse">
                            <li>
                                <a href="booking.php?source=view_all_booking">View all Booking</a>
                            </li>

                            
                        </ul>
                    </li>
                    
                    
                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

   

      