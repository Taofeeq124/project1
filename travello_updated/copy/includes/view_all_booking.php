<?php include("delete_modal.php");?>

<table class="table table-border table-hover">

<thead>

<tr>
    <th>Id</th>
    <th>F-name</th>
    <th>L-name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>City</th>
    <th>Coupon</th>
    <th>Depart Date</th>
    <th>Return Date</th>
    <th>Pickup</th>
    <th>Drop</th>
    <th>Vehicle</th>
    <th>Custmize</th>
    <th>View</th>
    <th>Delete</th>
</tr>
</thead>

<tbody>

<?php 

$query = "SELECT * FROM booking ";
$select_booking_query = mysqli_query($connection , $query);
while($loop = mysqli_fetch_assoc($select_booking_query )) {

    $book_id       = $loop['id'];
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
   
    echo "<tr>";
    echo "<td>$book_id</td>";
    echo "<td>$firstname</td>";
    echo "<td>$lastname</td>";
    echo "<td>$email</td>";
    echo "<td>$number</td>";
    echo "<td>$city</td>";
    echo "<td>$coupon</td>";
    echo "<td>$depart</td>";
    echo "<td>$return</td>";
    echo "<td>$pickup</td>";
    echo "<td>$drop</td>";
    echo "<td>$vehicle</td>";
    echo "<td>$customize</td>";
    echo " <td> <a   href='booking.php?source=view_booking&view_booking=$book_id'> read more.. <a/></td> ";
    echo " <td> <a class='delete_link'  href='javascript: void(0)' rel='$book_id '> <i class='fa fa-trash-o' style='font-size:20px;color:red'></i> <a/></td> ";
 
    echo "</tr>";
   
}

?>


</tbody>

</table>

<?php 

if(isset($_GET['delete'])){

    $delete_booking_id = $_GET['delete'];
    $query = "DELETE FROM booking WHERE id =$delete_booking_id";
    $delete_query = mysqli_query($connection,$query);
    if(!$delete_query){
        die("Query Failed" . mysqli_error($connection));
    }
    header("Location:booking.php");
}

?>


<script>

$(document).ready(function(){

$(".delete_link").on('click', function(){

  var id = $(this).attr("rel");
  var delete_url = "booking.php?delete="+ id + " ";
  $(".Modal_delete_link").attr("href", delete_url);

  $("#book_modal").modal('show');

});



});


</script>