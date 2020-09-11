<?php


if(isset($_GET['edit_place'])){

    $edit_place_id = $_GET['edit_place'] ;

    $query = "SELECT * FROM place WHERE id = $edit_place_id ";
    $edit_query = mysqli_query($connection,$query);
    while( $loop = mysqli_fetch_assoc($edit_query) ){
       
    $place_name              = $loop ['place_name'];
    $place_price             = $loop ['place_price'];
    $place_content           = $loop ['place_content'] ; 
    $place_status            = $loop ['place_status'] ;

    }



if(isset($_POST['edit_content'])){

    //$place_id                = $_POST['id'];
    $place_name              = $_POST ['place_name'];
    $place_price             = $_POST ['place_price'];
    $place_image             = $_FILES['image']['name'];
    $place_image_temp        = $_FILES['image']['tmp_name'];
    $place_content           = $_POST ['place_content'] ; 
    $place_status            = $_POST ['place_status'] ;
   

    move_uploaded_file ($place_image_temp, "../images/$place_image" );

    


     $query = " UPDATE place SET place_name ='{$place_name}',place_price = {$place_price}, place_image = '{$place_image}', place_content = '{$place_content}', place_status ='{$place_status}' WHERE id = $edit_place_id "; 
 
    $update_place_query = mysqli_query ($connection, $query);
    if(!$update_place_query){
        die("Query Failed". mysqli_error($connection));
    }


    // this funtion mysqli_insert_id() will hold the last id of the last post created

    $the_post_id = mysqli_insert_id($connection); 

    echo "<h4>Post Updated  <a href='place.php'> View All Posts</a>  </h4>";
        

}

}

?>



<form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                <label for="place_name">Change Place Name</label>
                <input type="text" class="form-control" value=" <?php echo $place_name ; ?>" name="place_name">
                </div>


                

                <div class="form-group">  
                <select name="place_status" id="" class="form-control">

                <option value="draft">Edit Place Status</option>
                <option value="published">Published</option>
                <option value="draft">Draft</option> 

                </select>
                </div>


                <div class="form-group">
                <label for="post_image">Change Image</label>
                <input type="file"  name="image">
                </div>

                <div class="form-group">
                <label for="post_tags">Edit Price</label>
                <input type="number" class="form-control" value=" <?php echo $place_price; ?>" name="place_price" >
                </div>


                    
                <div class="form-group " id="editor">
                <label for="post_content">Place Content</label>
                <textarea  class="form-control" value=" <?php echo $place_content; ?> " name="place_content"  cols="5" rows="10"></textarea >
                </div> 

               <!-- 
                <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
                 </script> -->

                <div class="form-group " style=" margin-top: 8px;">
                <input type="submit" class="btn btn-primary" name="edit_content" value="Edit Content">
                </div>



                </form>


