<?php include "../includes/db.php"; ?>

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



	<!-- Contact -->


	<?php 
				
				if(isset($_POST['submit'])){

					global $connection;


					
					$firstname         = $_POST['firstname'];
					$user_lastname     = $_POST['lastname'];
					$username          = $_POST['username'];
					$user_email        = $_POST['email'];
					$user_password     = $_POST['password'];
                    $user_date         = date  ('d-m-y');
                    //$user_role         = $_POST['user_role'];
                    

					$hashFormat = "$2y$10$";
					$salt = "iusesomeamazingstrings";
					$hashF_and_salt = $hashFormat . $salt ;
					$user_password = crypt($user_password, $hashF_and_salt);
					

					$query = " INSERT INTO admin_users ( user_firstname, user_lastname, username, user_email, user_password, user_date,user_role) VALUES ('{$firstname}','{$user_lastname}','{$username}', '{$user_email}', '{$user_password}', now(), 'subscriber' ) ";

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
						<form  action="newmatsignup.php" method="post"  id="contact_form" class="contact_form">
							
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
                            
								<div class="col-lg-12" style="margin-bottom: 18px">
									<div><input type="password" class="contact_input contact_input_subject inpt" placeholder="Your Password" name="password" required="required"><div class="input_border"></div></div>
								</div>
                            </div>
                            
                            <input type="submit" value="Submit"  class="contact_button" name="submit"> <span class="btn btn-dark ml-4 "> <a href="newmatlogin.php"  style= "color:whitesmoke;">Login Here</a> </span>

                            
							<!-- <button class="contact_button">send</button> -->
						</form>
					</div>
                </div>
                <div class="col-lg-2"> </div>
			</div>
		</div>
    </div>
    

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
