<?php include "../includes/db.php"; ?>
<?php session_start(); ?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login page</title>
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


	
<?php



  
   if (isset($_POST['submit'])) 
   {
  
   $error = ""; 
   $username = $_POST['username'];
   $password = $_POST['password'];
 

   $username = $connection-> real_escape_string( $username );
   $password = $connection-> real_escape_string( $password );

   $hashFormat = "$2y$10$";
   $salt = "iusesomeamazingstrings";
   $hashF_and_salt = $hashFormat . $salt ;
   $password = crypt($password, $hashF_and_salt);

   $query = "SELECT * FROM admin_users WHERE username = '{$username}' ";
   $select_user_query = mysqli_query ($connection , $query);

	   
if(!$select_user_query){
   die ('Query Failed' .mysqli_error($connection));
}

while($row = mysqli_fetch_array($select_user_query)){
   $db_id       = $row['id'];
   $db_username = $row['username'];
   $db_user_password = $row['user_password'];
}

   if($username !== $db_username && $password !== $db_user_password){


   header("Location: newmatlogin.php ");

   }elseif ($username == $db_username && $password == $db_user_password){

	$_SESSION ['username']         = $username;
   $_SESSION ['user_password']    = $db_user_password;
   $_SESSION ['id']               = $db_id;

   header("Location:index.php ");

}else{

   header("Location: ../index.php ");
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
 

					<div class="contact_form_container">
						<form action="newmatlogin.php" method="post" autocomplete="off" id="contact_form" class="contact_form">
							
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="your username" name="username" required="required"><div class="input_border"></div></div>
                                </div>
                                
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="password" class="contact_input contact_input_subject inpt" placeholder="Your password" name="password" required="required"><div class="input_border"></div></div>
								</div>
							</div>
							<input type="submit" value="Submit"  class="contact_button" name="submit"><span class="btn btn-dark ml-4 "> <a href="newmatsignup.php"  style= "color:whitesmoke;">Signup Here</a> </span>
                        
						</form>
					</div>
                </div>
                <div class="col-lg-2">  </div>
			</div>
        </div>
        </div>
	


  <?php // include "./includes/footer.php" ?> 