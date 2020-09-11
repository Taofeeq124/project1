<?php  include "./includes/header.php" ?>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/news.jpg)"></div>
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

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Container -->
				<div class="col-lg-8">
					<div class="news_container">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_4.jpg" alt=""></div>
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
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_5.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">10 Amazing Destination for you this summer</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_6.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">How to organize your perfect vacation</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

					</div>

					<!-- Pagination -->
					<div class="pagination">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li class="active"><a href="#">1.</a></li>
							<li><a href="#">2.</a></li>
							<li><a href="#">3.</a></li>
							<li><a href="#">4.</a></li>
							<li><a href="#">5.</a></li>
						</ul>
					</div>
				</div>

				<!-- News Sidebar -->
				<div class="col-lg-4">
					<div class="news_sidebar">

						<!-- Categories -->
						<div class="categories">
							<div class="sidebar_title">Categories</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Travels<span class="ml-auto">(09)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Organization<span class="ml-auto">(12)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Tips & Tricks<span class="ml-auto">(16)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Uncategorized<span class="ml-auto">(22)</span></div></a></li>
								</ul>
							</div>
						</div>

						<!-- Latest News -->
						<div class="latest">
							<div class="sidebar_title">Latest News</div>
							<div class="latest_container">
								
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="images/latest_1.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="images/latest_2.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="images/latest_3.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

							</div>
						</div>

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
	</div>

	<!-- Footer -->
<?php  include "./includes/footer.php" ?>