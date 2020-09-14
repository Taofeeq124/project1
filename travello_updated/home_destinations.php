
<?php include "./includes/db.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello-Home</title>
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

									<li class="active"><a href="home.php">Home</a></li>
									<li><a href="home_about.php">About us</a></li>
                                    <li class="active"><a href="home_booking.php">Book Here</a></li>
									<!-- <li><a href="#">Services</a></li>
									<li><a href="news.php">News</a></li> -->


									<li><a href="home_contact.php">Contact</a></li>
                                    <!-- <li class="">
                                    <a > <?php// echo "<img class='img-responsive' src=' ./images/$_SESSION ['user_image'] '  width='50%' alt='place images'> " ;?> </a>
                                    </li>  -->
                                    
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong class="mr-2">Hi,</strong><i class="fa fa-user"></i> <?php  echo $_SESSION ['username'] ;?> <b class="caret"></b></a> 
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
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="home_about.php">About us</a></li>
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

	


	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container-fluid">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Popular Destinations</h2></div>
				</div>
			</div>


			<!--  -->
<div class='container mt-5'>
		<div class='row'>
	<?php 

			
		
		 $query = "SELECT * FROM place WHERE place_status = 'published' ";
		 $select_query = mysqli_query ($connection, $query);
		 while($loop = mysqli_fetch_array($select_query)){
       
			$place_name              = $loop ['place_name'];
			$place_price             = $loop ['place_price'];
			$place_image             = $loop ['place_image'];
			$place_content           = $loop ['place_content'] ; 
			// $place_status            = $loop ['place_status'] ;

			echo "


	
			
			<div class='col-lg-4 mb-5'>
			<a href='home_destinations.php'>
				<img class='img-responsive' src='images/$place_image'  width='100%' alt='place images'> </a>
				
				<div class='destination_content'>
					<div class='destination_title'><a href='home_destinations.php'>$place_name</a></div>
					<div class='destination_subtitle'><p>$place_content</p></div>
					<div class='destination_price'>From $$place_price</div>
				</div>

				
	<div class='destination_list'>
	<ul>
		<li>5 Stars Hotel</li>
		<li>All Inclusive</li>
		<li>Flight tickets included</li>
		<li>Guided visits</li>
	</ul>
</div>
			
			</div>
			
		

			
			";
		
			}
		
		?>
	
		</div> 
		
	</div>



		</div>
	</div>


	 


	<!-- Testimonials -->

	<div class="testimonials" id="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Testimonials</h2></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>john turner,</div>
										<div>client</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="test_nav">
			<ul class="d-flex flex-column align-items-end justify-content-end">
				<li><a href="#">City Breaks Clients<span>01</span></a></li>
				<li><a href="#">Cruises Clients<span>02</span></a></li>
				<li><a href="#">All Inclusive Clients<span>03</span></a></li>
			</ul>
		</div>
	</div>



	<!-- Footer -->
<?php  include "./includes/footer.php" ?>