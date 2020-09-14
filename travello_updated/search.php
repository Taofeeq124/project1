<?php include "./includes/db.php"; ?>

<!-- Header -->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello</title>
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
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li ><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
                                    <li><a href="booking.php">Book Here</a></li>
									<li class="active"><a href="search.php">Search</a></li>
									<li><a href="news.php">News</a></li>
									<li><a href="signup.php">signup</a></li>
									<li><a href="signin.php">Login</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							<div class="header_phone ml-auto "> <a href=" tel: 09030014836"  style="color:white !important;"> Call Us</a></div>

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




<!-- Destinations -->

<div class="destinations" id="destinations">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <div class="section_subtitle">simply amazing places</div>
                <div class="section_title"><h2>Popular Destinations</h2></div>
                <!-- <div class="section_title"><h2><?php// echo $mssg ; ?></h2></div> -->
                
            </div>
        </div>


        <!--  -->
<div class='container mt-5'>
    <div class='row'>


    
<?php  

if(isset($_POST['submit'])){

    $city         = $_POST['city'];
    $departure    = $_POST['departure'];
    $arrival      = $_POST['arrival'];
    $budget       = $_POST['budget'];

    $query = "SELECT * FROM place WHERE place_name LIKE '%$city%' AND  place_price LIKE '%$budget%' ";
    $search_query = mysqli_query ($connection, $query);

        if(!$search_query){
            die("Query Failed" . mysqli_error($connection));
        }

        $count = mysqli_num_rows($search_query);

        if($count == 0){
         echo   $mssg = "<h2 class='text-center mt-2' style='color: black !important; font-weight:800;'> Ooops! It maybe Your searched city does match with your budget in our database, Try again Folks. </h2> ";
        }else{
    
     //$query = "SELECT * FROM place ";
     $select_query = mysqli_query ($connection, $query);
     while($loop = mysqli_fetch_array($select_query)){
   
        $place_name              = $loop ['place_name'];
        $place_price             = $loop ['place_price'];
        $place_image             = $loop ['place_image'];
        $place_content           = $loop ['place_content'] ; 
        $place_status            = $loop ['place_status'] ;

        echo "



        
        <div class='col-lg-4 mb-5'>
            <img class='img-responsive' src='images/$place_image'  width='100%' alt='place images'>
            
            <div class='destination_content'>
                <div class='destination_title'><a href='destinations.html'>$place_name</a></div>
                <div class='destination_subtitle'><p>$place_content</p></div>
                <div class='destination_price'>From $$place_price</div>
            </div>
        
        </div>
        
    

        
        ";
    
        }
    }
}
    
    ?>

    </div>
    
</div>

    </div>
</div>


 


<!-- News -->

<div class="news" id="news">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="news_container">
                    
                    <!-- News Post -->
                    <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                        <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                        <div class="news_post_content">
                            <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                <div>02</div>
                                <div>june</div>
                            </div>
                            <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                            <div class="news_post_category">
                                <ul>
                                    <li><a href="#">lifestyle & travel</a></li>
                                </ul>
                            </div>
                            <div class="news_post_text">
                                <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
                            </div>
                        </div>
                    </div>

                    <!-- News Post -->
                    <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                        <div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
                        <div class="news_post_content">
                            <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                <div>01</div>
                                <div>june</div>
                            </div>
                            <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                            <div class="news_post_category">
                                <ul>
                                    <li><a href="#">lifestyle & travel</a></li>
                                </ul>
                            </div>
                            <div class="news_post_text">
                                <p>Tempor massa et laoreet malesuada. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                            </div>
                        </div>
                    </div>

                    <!-- News Post -->
                    <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                        <div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
                        <div class="news_post_content">
                            <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                <div>29</div>
                                <div>may</div>
                            </div>
                            <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                            <div class="news_post_category">
                                <ul>
                                    <li><a href="#">lifestyle & travel</a></li>
                                </ul>
                            </div>
                            <div class="news_post_text">
                                <p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla nisl, accumsan sit amet mattis.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- News Sidebar -->
            <div class="col-xl-4">
                <div class="travello">
                    <div class="background_image" style="background-image:url(images/travello.jpg)"></div>
                    <div class="travello_content">
                        <div class="travello_content_inner">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="travello_container">
                        <a href="#">
                            <div class="d-flex flex-column align-items-center justify-content-end">
                                <span class="travello_title">Get a 20% Discount</span>
                                <span class="travello_subtitle">Buy Your Vacation Online Now</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php  include "./includes/footer.php" ?>