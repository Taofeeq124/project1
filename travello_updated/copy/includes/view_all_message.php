<?php include("delete_modal.php");?>

<table class="table table-border table-hover">

<thead>

<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Date</th>
    <th>Time</th>
    <th>View</th>
    <th>Reply</th>
    <th>Delete</th>
</tr>
</thead>

<tbody>

<?php 

$query = "SELECT * FROM contact ";
$select_users_query = mysqli_query($connection , $query);
while($loop = mysqli_fetch_assoc($select_users_query )) {

    $message_id             = $loop['id'];
    $message_author         = $loop['name'];
    $sender_email           = $loop['email'];
    $message_subject        = $loop['subject'];
    $message_content        = $loop['message'];
    $message_date           = $loop['m_date'];
    $message_time           = $loop['m_time'];

    echo "<tr>";
    echo "<td>$message_id</td>";
    echo "<td>$message_author</td>";
    echo "<td>$sender_email</td>";
    echo "<td>$message_subject</td>";
    echo "<td>$message_content</td>";
    echo "<td>$message_date</td>";
    echo "<td>$message_time</td>";
    echo "<td> <a href='message.php?source=view_message&view_message=$message_id '>Read..</a></td>";
    echo "<td> <a href='message.php?source=reply_message&reply_message=$message_id '>Reply..</a></td>";
    echo " <td> <a class='delete_link'  href='javascript: void(0)' rel='$message_id'> <i class='fa fa-trash-o' style='font-size:20px;color:red'></i> <a/></td> ";
   
   
    echo "</tr>";
   
}

?>


</tbody>

</table>

<?php 

if(isset($_GET['delete'])){

    $message_id = $_GET['delete'];
    $query = "DELETE FROM contact WHERE id = $message_id";
    $delete_query = mysqli_query($connection,$query);
    if(!$delete_query){
        die("Query Failed" . mysqli_error($connection));
    }
    header("Location:message.php");
}

?>


<script>

$(document).ready(function(){

$(".delete_link").on('click', function(){

  var id = $(this).attr("rel");
  var delete_url = "message.php?delete="+ id + " ";
  $(".Modal_delete_link").attr("href", delete_url);

  $("#message_user_modal").modal('show');

});



});


</script>