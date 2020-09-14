<?php include("delete_modal.php");?>

<table class="table table-border table-hover">

<thead>

<tr>
    <th>Id</th>
    <th>username</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Country</th>
    <th>City</th>
    <th>Zip Code</th>
    <th>Image</th>
    <th>Date</th>
    <th>Delete</th>
</tr>
</thead>

<tbody>

<?php 

$query = "SELECT * FROM users ";
$select_users_query = mysqli_query($connection , $query);
while($loop = mysqli_fetch_assoc($select_users_query )) {

    $user_id         = $loop['id'];
    $username        = $loop['username'];
    $user_firstname  = $loop['user_firstname'];
    $user_lastname   = $loop['user_lastname'];
    $user_email      = $loop['user_email'];
    $user_city       = $loop['user_city'];
    $user_contact    = $loop['user_number'];
    $user_zip_code   = $loop['user_code'];
    $user_country    = $loop['user_country'];
    $user_date       = $loop['user_date'];
    $user_image      = $loop['user_image'];

    echo "<tr>";
    echo "<td>$user_id </td>";
    echo "<td>$username </td>";
    echo "<td>$user_firstname </td>";
    echo "<td>$user_lastname </td>";
    echo "<td>$user_email </td>";
    echo "<td>$user_contact</td>";
    echo "<td>$user_country</td>";
    echo "<td>$user_city</td>";
    echo "<td>$user_zip_code</td>";
    echo " <td> <img class='img-responsive' width='100' src='../images/$user_image'> </td> ";
    echo "<td>$user_date </td>";
    //echo "<td> <a href='users.php?delete=$user_id'>Delete</a></td>";
    echo " <td> <a class='delete_link'  href='javascript: void(0)' rel='$user_id'> <i class='fa fa-trash-o' style='font-size:20px;color:red'></i> <a/></td> ";
    echo "</tr>";
   
}

?>


</tbody>

</table>


<?php 

if(isset($_GET['delete'])){

    $delete_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE id = $delete_id ";
    $delete_query = mysqli_query($connection,$query);
    if(!$delete_query){
        die("Query Failed" . mysqli_error($connection));
    }
    header("Location: norm_user.php");
}

?>


<script>

$(document).ready(function(){

$(".delete_link").on('click', function(){

  var id = $(this).attr("rel");
  var delete_url = "norm_user.php?delete="+ id + " ";
  $(".Modal_delete_link").attr("href", delete_url);

  $("#norm_user_modal").modal('show');

});



});


</script>