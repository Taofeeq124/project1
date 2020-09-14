
<?php include "./includes/db.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
							<nav class="main_nav_home">
								<ul class="d-flex flex-row align-items-start justify-content-start">

									<li ><a href="home.php">Home</a></li>
									<li><a href="home_about.php">About us</a></li>
									<li ><a href="home_booking.php">Book Here</a></li>
									<!-- <li><a href="#">Services</a></li>
									<li><a href="news.php">News</a></li> -->


									<li class="active"><a href="home_contact.php">Contact</a></li>
                                    <!-- <li class="">
                                    <a > <?php// echo "<img class='img-responsive' src=' ./images/$_SESSION ['user_image'] '  width='50%' alt='place images'> " ;?> </a>
                                    </li>  -->
                                    
<li class="dropdown"> 
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong class="mr-2">Hi,</strong><i class="fa fa-user"></i>  <?php  echo $_SESSION ['username'] ;?> <b class="caret"></b></a> 
<ul class="dropdown-menu">
<li>
<a href="#"><i class="fa fa-fw fa-user ml-2"></i> Profile</a>
</li>
<li class="divider"></li>

<li>
<a href="#"><i class="fa fa-fw fa-upload ml-2"></i>Upload Image</a>
</li>
 

<li>

<?php 

// if(isset($_POST['submit'])){

// $user_image             = $_FILES['image']['name'];
// $user_image_temp        = $_FILES['image']['tmp_name'];

// move_uploaded_file ($user_image_temp, "./images/$user_image" );




//         $query       =" SELECT * FROM users ";
//         $image_query = mysqli_query($connection,$query);
        
//         while($row = mysqli_fetch_assoc($image_query)){
//             $user_images  = $row['user_image'];
//         }
//         $query = "UPDATE users SET user_image ='{$user_image}'  WHERE user_image = $_SESSION ['user_image'] "; 

//         if(!$image_query){
//             die("Query Failed". mysqli_error($connection));
//         }

//     } 

        
 ?>



<a href="#"><i class="ml-2"></i>
<form action="home.php" method="post" enctype="multipart/form-data">
 <input type="file" name="image" id="">
 <input type="submit" name="submit" class="btn btn-success" value="Upload">
</form> 
</a>
</li>
<li class="divider"></li>
<li>
<a href="user_logout.php"><i class="fa fa-fw fa-power-off ml-2"></i> Log Out</a>
</li>
</ul>







                                </ul>
                            </nav>
                            
                           
							<!-- <div class="header_phone ml-auto "> <a href=" tel: 09030014836"  style="color:white !important;"> Call Us</a></div> -->

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
			<div class="menu_logo"><a href="home.php">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="home_about.php">About us</a></li>
				<li ><a href="home_booking.php">Book Here</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="home_contact.php">Contact</a></li>
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
    
    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            
            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_title"><h2>Let us take you away</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_title"><h2>Let us take you away</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_title"><h2>Let us take you away</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="home_page_nav">
            <ul class="d-flex flex-column align-items-end justify-content-end">
                <li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
                <li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
                <li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Search -->


<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_title">Search for your trip</div>
                    <div class="home_search_content">
                        <form action="home_search.php" method="post" class="home_search_form" id="home_search_form">
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


<!-- Contact -->

<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title">Get in touch with us</div>
						<div class="contact_text">
							<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
						</div>
						<div class="contact_list">
							<ul>
								<li>
									<div>address:</div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li>
									<div>phone:</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>email:</div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<?php 
				
				if(isset($_POST['submit'])){

					$name            = $_POST['name'];
					$email           = $_POST['email'];
					$subject         = $_POST['subject'];
					$message         = $_POST['message'];
					$date            = date  ('d-m-y');

					$query = "INSERT INTO contact (name, m_date, email,subject, message  ) VALUES ('{$name}', now(), '{$email}','{$subject}','{$message}' ) ";

					$contact_query =  mysqli_query($connection , $query);

					if(!$contact_query){

					   die("Query Failed". mysqli_error($connection));
					}

					$mssg = "<h4 class='text-center mt-2' style='color: black !important;'>Message Sent </h4> ";
  
  
				   }else{
				
					$mssg = " ";
				
					}
				
				
				
				
				?>

				<!-- Contact Form -->
				<div class="col-lg-6">

				<?php echo $mssg;  ?>
					<div class="contact_form_container">
						<form action="home_contact.php" method="post" enctype="multipart/form-data" id="contact_form" class="contact_form">
							<div style="margin-bottom: 18px"><input type="text" class="contact_input contact_input_name inpt" placeholder="Your Name" name="name" required="required"><div class="input_border"></div></div>
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your E-mail" name="email" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_subject inpt" name="subject" placeholder="Subject" required="required"><div class="input_border"></div></div>
								</div>
							</div>
							<div><textarea class="contact_textarea contact_input inpt" placeholder="Message" name="message" required="required"></textarea><div class="input_border" style="bottom:3px"></div></div>
							<input type="submit" value="Send Message"  class="contact_button" name="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php  include "./includes/footer.php" ?>