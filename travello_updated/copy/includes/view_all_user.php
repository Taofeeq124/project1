<?php include("delete_modal.php");?>

<table class="table table-border table-hover">

<thead>

<tr>
    <th>Id</th>
    <th>username</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Role</th>
    <th>Date</th>
    <th>Approve</th>
    <th>Unapprove</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>

<tbody>

<?php 

$query = "SELECT * FROM admin_users ";
$select_users_query = mysqli_query($connection , $query);
while($loop = mysqli_fetch_assoc($select_users_query )) {

    $user_id         = $loop['id'];
    $username        = $loop['username'];
    $user_firstname  = $loop['user_firstname'];
    $user_lastname   = $loop['user_lastname'];
    $user_email      = $loop['user_email'];
    $user_role       = $loop['user_role'];
    $user_date       = $loop['user_date'];

    echo "<tr>";
    echo "<td>$user_id </td>";
    echo "<td>$username </td>";
    echo "<td>$user_firstname </td>";
    echo "<td>$user_lastname </td>";
    echo "<td>$user_email </td>";
    echo "<td>$user_role</td>";
    echo "<td>$user_date </td>";
    echo "<td> <a href='users.php?admin=$user_id'>Approve</a> </td>";
    echo "<td> <a href='users.php?subscriber=$user_id'>Unapprove</a> </td>";
    //echo "<td> <a href='users.php?delete=$user_id'>Delete</a></td>";
    echo " <td> <a class='delete_link'  href='javascript: void(0)' rel='$user_id'> <i class='fa fa-trash-o' style='font-size:20px;color:red'></i> <a/></td> ";
    echo "<td> <a href='users.php?source=edit_user&edit_user=$user_id'>Edit</a></td>";
    echo "</tr>";
   
}

?>


</tbody>

</table>

<?php 

if(isset($_GET['admin'])){

    $admin_id = $_GET['admin'];
    $query = "UPDATE admin_users SET user_role = 'Admin' WHERE id = $admin_id ";
    $admin_query = mysqli_query($connection,$query);
    header("Location:users.php");
}

?>
<?php

if(isset($_GET['subscriber'])){

    $subscriber_id = $_GET['subscriber'];
    $query = "UPDATE admin_users SET user_role = 'Subscriber' WHERE id =$subscriber_id ";
    $subscriber_query = mysqli_query($connection,$query);
    header("Location:users.php");
}

?>
<?php 

if(isset($_GET['delete'])){

    $delete_id = $_GET['delete'];
    $query = "DELETE FROM admin_users WHERE id = $delete_id ";
    $delete_query = mysqli_query($connection,$query);
    if(!$delete_query){
        die("Query Failed" . mysqli_error($connection));
    }
    header("Location:place.php");
}

?>


<script>

$(document).ready(function(){

$(".delete_link").on('click', function(){

  var id = $(this).attr("rel");
  var delete_url = "users.php?delete="+ id + " ";
  $(".Modal_delete_link").attr("href", delete_url);

  $("#user_modal").modal('show');

});



});


</script>