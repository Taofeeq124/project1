
<?php 


    if(isset($_GET['view_booking'])){

        $view_booking_id = $_GET['view_booking'];

    $query = " SELECT * FROM booking WHERE id =  $view_booking_id ";
    $select_users_query = mysqli_query($connection , $query);
    while($loop = mysqli_fetch_assoc($select_users_query )) {
    
        $tour_code     = $loop['tour_code'];
        $email         = $loop['email'];
        $firstname     = $loop['firstname'];
        $lastname      = $loop['lastname'];
        $number        = $loop['phone_num'];
        $city          = $loop['city'];
        $return        = $loop['return_address'];
        $depart        = $loop['depart'];
        $pickup        = $loop['pickup'];
        $drop          = $loop['drop_address'];
        $vehicle       = $loop['pick_vehicle'];
        $coupon        = $loop['coupon'];
        $customize     = $loop['customize'];  
        $passenger     = $loop['num_pass'];
        $add_message   = $loop['add_message'];
        $time          = $loop['book_time'];
       


    }

}
?>



<form action="" method="" enctype="multipart/form-data">

    
<div class='text-center ' style="margin-bottom:15px;"> 

<h4 class='btn btn-default' ><a href='Booking.php' > View All Booking  </a></h4>  
<h4 class="btn btn-default">Date Recieved: </h4>  <h4 class="btn btn-default"> <?Php echo $time;?></h4>

</div>

<div class="row mt-5 ">

<!-- <div class="col-lg-6 text-center "> </div> -->



<div class="form-group">
<label for="firstname">Sender firstname:</label>
<input type="text" value=" <?Php echo $firstname;?>" class="form-control" name="name" required>
</div>
<div class="form-group">
<label for="firstname">Sender Lastname:</label>
<input type="text" value=" <?Php echo $lastname;?>" class="form-control" name="name" required>
</div>

<div class="form-group">
<label for="lastname">Sender Email:</label>
<input type="text"  value=" <?Php echo $email; ?>" class="form-control"  required>
</div>

<div class="form-group">
<label for="lastname">Tour Code:</label>
<input type="text"  value=" <?Php echo $tour_code; ?>" class="form-control"  required>
</div>
<div class="form-group">
<label for="lastname">City:</label>
<input type="text"  value=" <?Php echo $city; ?>" class="form-control"  required>
</div>
<div class="form-group">
<label for="lastname">Contact:</label>
<input type="text"  value=" <?Php echo $number; ?>" class="form-control"  required>
</div>
<div class="form-group">
<label for="lastname">Return Date:</label>
<input type="text"  value=" <?Php echo $return; ?>" class="form-control"  required>
</div>
<div class="form-group">
<label for="lastname">Depart Date:</label>
<input type="text"  value=" <?Php echo $depart; ?>" class="form-control"  required>
</div>
<div class="form-group">
<label for="lastname">Pickup Address:</label>
<input type="text"  value=" <?Php echo $pickup; ?>" class="form-control"  required>
</div>
<div class="form-group">
<label for="lastname">Drop Address:</label>
<input type="text"  value=" <?Php echo $drop; ?>" class="form-control"  required>
</div>

<div class="form-group">
<label for="username">Pickup Vehicle:</label>
<input type="text"  value=" <?Php echo $vehicle; ?>"  class="form-control"  required >
</div>

<div class="form-group">
<label for="username">Number Of Passanger:</label>
<input type="text"  value=" <?Php echo $passenger; ?>"  class="form-control"  required >
</div>


<div class="form-group " id="editor">
<label for="post_content">Additional message</label>
<textarea  class="form-control"    cols="5" rows="10"> <?php echo $add_message; ?> </textarea >
</div> 

<div class="form-group " id="editor">
<label for="post_content">Customize Message</label>
<textarea  class="form-control"   cols="5" rows="10"> <?php echo $customize; ?> </textarea >
</div> 



     
<!-- <div class="form-group">
<label for="password">Password</label>
<input type="password" autocomplete="off"   class="form-control" name="user_password" required >
</div> -->

</form>