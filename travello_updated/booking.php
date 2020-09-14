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
									<li class="active"><a href="booking.php">Book Here</a></li>
									<li><a href="news.php">News</a></li>
									<li ><a href="signup.php">signup</a></li>
									<li ><a href="signin.php">Login</a></li>
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




<!-- Booking -->

<?php 

if(isset($_POST['submit'])){

    $tour_code     = $_POST['tour_code'];
    $email         = $_POST['email'];
    $firstname     = $_POST['firstname'];
    $lastname      = $_POST['lastname'];
    $number        = $_POST['number'];
    $city          = $_POST['city'];
    $return        = $_POST['return'];
    $depart        = $_POST['depart'];
    $pickup        = $_POST['pickup'];
    $drop          = $_POST['drop'];
    $vehicle       = $_POST['vehicle'];
    $coupon        = $_POST['coupon'];
    $customize     = $_POST['customize'];  
    $passenger     = $_POST['passanger'];
    $add_message   = $_POST['add_message'];

    $query = "INSERT INTO booking (email,firstname,lastname,tour_code,phone_num,city,return_address,depart,pickup,drop_address,pick_vehicle,num_pass,coupon,customize,add_message) VALUES ('{$email}','{$firstname}','{$lastname}','{$tour_code}',{$number},'{$city}','{$return}','{$depart}','{$pickup}','{$drop}','{$vehicle}','{$passenger}','{$coupon}','{$customize}','{$add_message}')";

    $book_query = mysqli_query($connection,$query);

        if(!$book_query){

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

                <h3 class="text-center">Tour Booking Form</h3>
				<?php echo $mssg;  ?>
					<div class="contact_form_container">
						<form  action="" method="post"  id="contact_form" class="contact_form" enctype="multipart/form-data">
							
							<div class="row">

								<div class="col-lg-6" style="margin-bottom: 18px">   
                                <div>   
                                    <select name="tour_code" id="" class="contact_input contact_input_subject inpt">
                                    <option value="">select your tour code</option>
                                    <option value="B-T 01">B-T 01</option>
                                    <option value="B-T 02">B-T 02</option>
                                    <option value="E-T 01">E-T 01</option>
                                    <option value="E-T 01">E-T 02</option>
                                    <option value="D-T 01">D-T 01</option>
                                    <option value="D-T 01">D-T 02</option>
                                    <option value="R-S 01">S-S 01</option>
                                    <option value="S-T 01">S-T 01</option>
                                    <option value="S-T 02">S-T 02</option>
                                    <option value="S-T 03">S-T 03</option>
                                    <option value="S-T 04">S-T 04</option>
                                    </select>
                                    <div class="input_border"></div>
                                    </div>
								</div>

                                
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="email" class="contact_input contact_input_subject inpt" placeholder="Your Email" name="email" required="required"><div class="input_border"></div></div>
								</div>
								

                            </div>


                            <div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your firstname" name="firstname" required="required"><div class="input_border"></div></div>
								</div>

                                <div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_subject inpt" placeholder="Your Lastname" name="lastname" required="required"><div class="input_border"></div></div>
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
							
							<div class="row mt-2">

							   <div class="col-lg-6" style="margin-bottom: 18px">
                               <label for="departure">Departure Date/Time (approximately)</label>
									<div><input type="date" class="contact_input contact_input_subject inpt" placeholder="Your Zip Code" name="depart" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
                                <label for="departure">Return Date/Time (approximately)</label>
									<div><input type="date" class="contact_input contact_input_email inpt"  name="return" required="required"><div class="input_border"></div></div>
								</div>
								
                            </div>
                            
                            <div class="row mt-3">
								<div class="col-lg-6" style="margin-bottom: 18px">
                                <label for="pickup">Pickup Address (Airport Or Hotel)</label>
									<div><textarea  class="contact_input contact_input_email inpt"  name="pickup" required="required"></textarea><div class="input_border"></div></div>
							</div>

								<div class="col-lg-6" style="margin-bottom: 18px">
                                <label for="departure">Drop Address (Airport Or Hotel)</label>
									<div><div><textarea  class="contact_input contact_input_email inpt"  name="drop" required="required"></textarea><div class="input_border"></div></div><div class="input_border"></div></div>
								</div>
                            </div>


                            <div class="row mt-3">
								<div class="col-lg-6" style="margin-bottom: 18px">
                                <label for="pickup">Create Your own Customize Tour</label>
									<div><textarea  class="contact_input contact_input_email inpt"  name="customize"  required="required">Here you can create your own tour.</textarea><div class="input_border"></div></div>
							</div>

                            <div class="col-lg-6" style="margin-bottom: 18px">   
                            <label for="pickup">Pick Your Vehicle</label>
                                <div>   
                                    <select name="vehicle" id="" class="contact_input contact_input_subject inpt">
                                    <option value="">select your vehicle</option>
                                    <option value="Car (3 PAX) $60 per day">Car (3 PAX) $60 per day</option>
                                    <option value="Small Coach (4-8 PAX) $70 per day">Small Coach (4-8 PAX) $70 per day</option>
                                    <option value="Coach (8-15 PAX) $110 per day">Coach (8-15 PAX) $110 per day</option>
                                    <option value="Large Coach (15-25 PAX) $130 per day">Large Coach (15-25 PAX) $130 per day</option>
                                    
                                    </select>
                                    <div class="input_border"></div>
                                    </div>
								</div>
                            </div>

                            <div class="row mt-3">

                            <div class="col-lg-6" style="margin-bottom: 18px">
                            <label for="pickup">Number of passengers</label>
									<div><input type="number" class="contact_input contact_input_email inpt" placeholder="" name="passanger" required="required"><div class="input_border"></div></div>
								</div>

								<div class="col-lg-6" style="margin-bottom: 18px">
                                <label for="pickup">Additional Message:</label>
									<div><textarea  class="contact_input contact_input_email inpt"  name="add_message"  required="required"></textarea><div class="input_border"></div></div>
							</div>
                            </div>

                            <div class="row mt-3">
                           
                            <div class="col-lg-12" style="margin-bottom: 18px">
                            <!-- <label class="text-center" for="pickup ">Coupon Code</label> -->
                            <div><input type="text" class="contact_input contact_input_email inpt" placeholder="Enter here coupon code for 10% off for your tour" name="coupon" required="required"><div class="input_border"></div></div>
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

	



<?php  include "./includes/footer.php" ?> 