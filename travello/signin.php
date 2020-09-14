<?php include "./includes/db.php"; ?>
<?php  session_start();?>
<?php  ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Travello</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
								    <li ><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="booking.php">Book Here</a></li>
									<li><a href="news.php">News</a></li>
									<li ><a href="signup.php">signup</a></li>
									<li class="active"><a href="signin.php">Login</a></li>
									<li ><a href="contact.php">Contact</a></li>
									<li ><a href=" tel: 09030014836"  style="color:white !important;"> Call us</a></li>
								</ul>
							</nav>
							<!-- <div class="header_phone ml-auto "> <a href=" tel: 09030014836"  style="color:white !important;"> Call us</a></div> -->


							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
		<ul>
				<li><a href="inex.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="booking.php">Book Here</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="signup.php">signup</a></li>
				<li><a href="signin.php">Login</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto"><a href=" tel: 09030014836"  style="color:white !important;"> Call us: +2349030014836</a></div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
	</div>

	<!-- Search -->

	
<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_title">Search for your trip</div>
                    <div class="home_search_content">
                        <form action="search.php" method="post" class="home_search_form" id="home_search_form">
                            <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                            

                            <select name="city" id="" class="search_input search_input_1">

                            <option value='select city'> Select City </option> ;
                            <?php  
                            
                            $query ="SELECT * FROM place ";
                            $search_query = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_array( $search_query)){
                                $place_name = $row['place_name'];

                                echo "  <option value='$place_name'>$place_name</option> ";
                            }
                            
                            ?>
                          
                            

                            </select>

                            

                                <!-- <input type="text" class="search_input search_input_1" placeholder="City" name="city" required="required"> -->
                                <input type="text" name="departure" class="search_input search_input_2" placeholder="Departure" required="required">
                                <input type="text" name="arrival" class="search_input search_input_3" placeholder="Arrival"  required="required">


                                <select name="budget" id="" class="search_input search_input_1">

                                <option value='select budget'> Select Budget </option> ;
                                <?php  

                                $query ="SELECT * FROM place ";
                                $search_query = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_array( $search_query)){
                                $place_price = $row['place_price'];

                                echo "  <option value='$place_price'>$ $place_price</option> ";
                                }

                                ?>

                                </select>

                                <!-- <input type="text" name="budget" class="search_input search_input_4" placeholder="Budget" required="required"> -->

                                <input type="submit" name="submit" class="home_search_button" value="Search">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
<?php



  
   if (isset($_POST['submit'])) 
   {
  
   
   $username = $_POST['username'];
   $password = $_POST['password'];
 

   $username = $connection-> real_escape_string( $username );
   $password = $connection-> real_escape_string( $password );

   $hashFormat = "$2y$10$";
   $salt = "iusesomeamazingstrings";
   $hashF_and_salt = $hashFormat . $salt ;
   $password = crypt($password, $hashF_and_salt);

   $query = "SELECT * FROM users WHERE username = '{$username}' ";
   $select_user_query = mysqli_query ($connection , $query);

	   
if(!$select_user_query){
   die ('Query Failed' .mysqli_error($connection));
}

while($row = mysqli_fetch_array($select_user_query)){
   $db_id       = $row['id'];
   $db_username = $row['username'];
   $db_user_password = $row['user_password'];
}

//    if($username !== $db_username && $password !== $db_user_password){

//    $error = "Your Password does not match with your username , Try again!!"; 
//    header("Location: signin.php ");

   if ($username == $db_username && $password == $db_user_password){

	$_SESSION ['username']       = $username;
	$_SESSION ['user_password']  = $db_user_password;
    // $_SESSION ['id']             = $db_user_id;
    // $_SESSION ['user_image']     = $db_user_image;

   header("Location: home.php ");

}else{

   header("Location: index.php ");
   
}

   }

   ?>

            <!-- Contact Form -->
            <div class="contact">
		   <div class="container">
			<div class="row">

                <div class="col-lg-2"> </div>
				<div class="col-lg-8">

                <h3 class="text-center">Login Here</h3>
 
   					<?php //echo  $error ; ?>
					<div class="contact_form_container">
						<form action="signin.php" method="post" autocomplete="off" id="contact_form" class="contact_form">
							
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="your username" name="username" required="required"><div class="input_border"></div></div>
                                </div>
                                
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="password" class="contact_input contact_input_subject inpt" placeholder="Your password" name="password" required="required"><div class="input_border"></div></div>
								</div>
							</div>
							<input type="submit" value="Login"  class="contact_button" name="submit">
                        
						</form>
					</div>
                </div>
                <div class="col-lg-2"> </div>
			</div>
        </div>
        </div>
	


  <?php  include "./includes/footer.php" ?> 