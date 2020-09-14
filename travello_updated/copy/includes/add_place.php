<?php

if(isset($_POST['create_content'])){

    //$place_id                = $_POST['id'];
    $place_name              = $_POST['place_name'];
    $place_price             = $_POST ['place_price'];
    $place_image             = $_FILES['image']['name'];
    $place_image_temp        = $_FILES['image']['tmp_name'];
    $place_content           = $_POST ['place_content'] ; 
    $place_status            = $_POST ['place_status'] ;
    //$place_view              = mysqli_real_escape_string($connection,$_POST['place_view_count'] );

    move_uploaded_file ($place_image_temp, "../images/$place_image" );

    


     $query = " INSERT INTO place (place_name, place_price, place_image, place_content, place_status) VALUES ('{$place_name}', {$place_price} ,'{$place_image}', '{$place_content}','{$place_status}') ";  
 
    $add_place_query = mysqli_query ($connection, $query);
    if(!$add_place_query){
        die("Query Failed". mysqli_error($connection));
    }


    // this funtion mysqli_insert_id() will hold the last id of the last post created

    $the_post_id = mysqli_insert_id($connection); 

    echo "<h4>Place Created <a href='../place.php?p_id=$the_post_id'> View Place</a> Or <a href='place.php'> View All Posts</a>  </h4>";
        

}

?>



<form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                <label for="place_name">Place Name</label>
                <input type="text" class="form-control" name="place_name">
                </div>


                

                <div class="form-group">  
                <select name="place_status" id="" class="form-control">

                <option value="draft">Select Place Status</option>
                <option value="published">Published</option>
                <option value="draft">Draft</option> 

                </select>
                </div>


                <div class="form-group">
                <label for="post_image">Place Image</label>
                <input type="file"  name="image">
                </div>

                <div class="form-group">
                <label for="post_tags">Place Price</label>
                <input type="number" class="form-control" name="place_price" >
                </div>


                    
                <div class="form-group " id="editor">
                <label for="post_content">Place Content</label>
                <textarea  class="form-control" name="place_content" id="editor" cols="5" rows="10"></textarea >
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
                <input type="submit" class="btn btn-primary" name="create_content" value="Publish Content">
                </div>



                </form>
<!--                 
                <div class="form-group">
                
                <select name="post_category_id" id="" class="form-control"> -->

               <?php 

               // Selecting Categories Title From Database

            //    $query = "SELECT * FROM categories ";
            //    $select_cat_query = mysqli_query($connection,$query);

            //    ConfirmQuery($select_cat_query);

            //    while($row = mysqli_fetch_assoc($select_cat_query)){

            //         $cat_id = $row['cat_id'];
            //         $cat_title = $row['cat_title'];

            //         echo "<option value='{$cat_id}'> {$cat_title} </option>";
            //    } ?>

               <!-- </select>
               
                </div> -->

<!-- 
                <div class="form-group">
                
                <select name="post_user" id="" class="form-control">
                <option value=""> Select place</option> -->

               <?php 

               // Selecting  Post author From Database

            //    $query = "SELECT * FROM category ";
            //    $select_category_query = mysqli_query($connection,$query);

            //    ConfirmQuery($$select_category_query);

            //    while($row = mysqli_fetch_assoc($$select_category_query)){

            //         $post_id     = $row['post_id'];
            //         $post_author = $row['user_username'];

            //         echo "<option value='{$post_author}'> {$post_author} </option>";
            //    } ?>

               <!-- </select>
               
                </div> -->



