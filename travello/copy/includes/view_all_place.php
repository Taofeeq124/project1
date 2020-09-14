<?php include("delete_modal.php");?>

<table class="table table-border table-hover">

<thead>

<tr>
    <th>Id</th>
    <th>Place</th>
    <th>Content</th>
    <th>Price</th>
    <th>Image</th>
    <th>Post Status</th>
    <th>Publish</th>
    <th>Draft</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>

<tbody>

<?php 

$query = "SELECT * FROM place ";
$select_users_query = mysqli_query($connection , $query);
while($loop = mysqli_fetch_assoc($select_users_query )) {

    $place_id           = $loop['id'];
    $place_name         = $loop['place_name'];
    $place_content      = $loop['place_content'];
    $place_price        = $loop['place_price'];
    $place_image        = $loop['place_image'];
    $place_status       = $loop['place_status'];

    echo "<tr>";
    echo "<td>$place_id</td>";
    echo "<td>$place_name</td>";
    echo "<td> $place_content</td>";
    echo "<td>$place_price</td>";
    echo " <td> <img class='img-responsive' width='100' src='../images/$place_image'> </td> ";
    echo "<td>$place_status</td>";
    echo "<td> <a href='place.php?publish=$place_id '>publish</a></td>";
    echo "<td> <a href='place.php?draft=$place_id '>draft</a></td>";
    echo " <td> <a class='delete_link'  href='javascript: void(0)' rel='$place_id '> <i class='fa fa-trash-o' style='font-size:20px;color:red'></i> <a/></td> ";
    echo "<td> <a href='place.php?source=edit_place&edit_place=$place_id '>Edit</a></td>";
   
    echo "</tr>";
   
}

?>


</tbody>

</table>

<?php 

if(isset($_GET['delete'])){

    $delete_place_id = $_GET['delete'];
    $query = "DELETE FROM place WHERE id =$delete_place_id";
    $delete_query = mysqli_query($connection,$query);
    if(!$delete_query){
        die("Query Failed" . mysqli_error($connection));
    }
    header("Location:place.php");
}

?>

<?php 

if(isset($_GET['draft'])){

    $draft_place_id = $_GET['draft'];
    $query = "UPDATE place SET place_status = 'draft' WHERE id = {$draft_place_id} ";
    $draft_query = mysqli_query($connection,$query);
    if(!$draft_query){
        die("Query Failed" . mysqli_error($connection));
    }
    header("Location:place.php");
}

?>

<?php 

if(isset($_GET['publish'])){

    $publish_place_id = $_GET['publish'];
    $query = "UPDATE place SET place_status = 'published' WHERE id = {$publish_place_id} ";
    $approve_query = mysqli_query($connection,$query);
    if(!$approve_query){
        die("Query Failed" . mysqli_error($connection));
    }
    header("Location:place.php");
}

?>



<script>

$(document).ready(function(){

$(".delete_link").on('click', function(){

  var id = $(this).attr("rel");
  var delete_url = "place.php?delete="+ id + " ";
  $(".Modal_delete_link").attr("href", delete_url);

  $("#place_modal").modal('show');

});



});


</script>