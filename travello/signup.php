<?php include "./includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SignUp</title>
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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
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
									<li class="active"><a href="signup.php">signup</a></li>
									<li><a href="signin.php">Login</a></li>
									<li ><a href="contact.php">Contact</a></li>
									<li ><a href=" tel: 09030014836"  style="color:white !important;"> Call us</a></li>
								</ul>
							</nav>
							<!-- <div class="header_phone  "> <a href=" tel: 09030014836"  style="color:white !important;"> Call us</a></div> -->


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
				<li ><a href="signup.php">signup</a></li>
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
							<form action="#" class="home_search_form" id="home_search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<input type="text" class="search_input search_input_1" placeholder="City" required="required">
									<input type="text" class="search_input search_input_2" placeholder="Departure" required="required">
									<input type="text" class="search_input search_input_3" placeholder="Arrival" required="required">
									<input type="text" class="search_input search_input_4" placeholder="Budget" required="required">
									<button class="home_search_button">search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->


	<?php 
				
				if(isset($_POST['submit'])){

					global $connection;


					
					$firstname         = $_POST['firstname'];
					$user_lastname     = $_POST['lastname'];
					$username          = $_POST['username'];
					$user_email        = $_POST['email'];
					$user_code         = $_POST['zip'];
					$user_number       = $_POST['number'];
					$user_city         = $_POST['city'];

					$user_image        = $_FILES['image']['name'];
					$user_temp_image   = $_FILES['image']['tmp_name'];

					$user_country      = $_POST['country'];
					$user_password     = $_POST['password'];
					$user_date         = date  ('d-m-y');

					move_uploaded_file ($user_temp_image, "./images/$user_image" );



					$hashFormat = "$2y$10$";
					$salt = "iusesomeamazingstrings";
					$hashF_and_salt = $hashFormat . $salt ;
					$user_password = crypt($user_password, $hashF_and_salt);
					

					$query = " INSERT INTO users ( user_firstname, user_lastname, username, user_email,user_country, user_password, user_date,user_image ,user_number,user_code,user_city) VALUES ('{$firstname}','{$user_lastname}','{$username}','{$user_email}','{$user_country}', '{$user_password}', now(),'{$user_image}',{$user_number},{$user_code},'{$user_city}') ";

					 $signup_query =  mysqli_query($connection , $query);

					 if(!$signup_query){

						die("Query Failed". mysqli_error($connection));
					 }

					 $mssg = "<h4 class='text-center mt-2' style='color: black !important;'> Form Submited </h4> ";
   
   
					}else{
				 
					 $mssg = " ";
				 
					 }
				 
				
				?>

	<div class="contact">
		<div class="container">
			<div class="row">

                <!-- Contact Form -->
                <div class="col-lg-2"> </div>
				<div class="col-lg-8">

                <h3 class="text-center">Sign Up Here</h3>
				<?php echo $mssg;  ?>
					<div class="contact_form_container">
						<form  action="" method="post"  id="contact_form" class="contact_form" enctype="multipart/form-data">
							
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your Firstname" name="firstname" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_subject inpt" placeholder="Your Lastname" name="lastname" required="required"><div class="input_border"></div></div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your Username" name="username" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="email" class="contact_input contact_input_subject inpt" placeholder="Your Email" name="email" required="required"><div class="input_border"></div></div>
								</div>
							</div>
							
							<div class="row">

							   <div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="number" class="contact_input contact_input_subject inpt" placeholder="Your Phone Number" name="number" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your City" name="city" required="required"><div class="input_border"></div></div>
								</div>
								
							</div>
							
							<div class="row">

							   <div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="number" class="contact_input contact_input_subject inpt" placeholder="Your Zip Code" name="zip" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your Country" name="country" required="required"><div class="input_border"></div></div>
								</div>
								
                            </div>
                            
                            <div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="file" class="contact_input contact_input_subject inpt form-control"  name="image" ><div class="iput_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="password" class="contact_input contact_input_subject inpt" placeholder="Your Password" name="password" required="required"><div class="input_border"></div></div>
								</div>
                            </div>
                            
                            <input type="submit" value="Submit"  class="contact_button" name="submit">
							
							<!-- <button class="contact_button">send</button> -->
						</form>
					</div>
                </div>
                <div class="col-lg-2"> </div>
			</div>
		</div>
	</div>

	<!-- Map -->

	<!-- <div class="contact_map">
		 Google Map 
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
							<div class="newsletter_subtitle">Join our database NOW!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name inpt" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email inpt" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">subscribe</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: +44 5567 32 664 567</li>
										<li>Mobile: +44 5567 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>4124 Barnes Street, Sanford, FL 32771</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>youremail@gmail.com</li>
										<li>Office@yourbusinessname.com</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>