
<?php 

if(isset($_GET['edit_user'])){

    $edit_user_id = $_GET['edit_user'];

    $query = "SELECT * FROM admin_users WHERE id = $edit_user_id ";
    $select_user_query = mysqli_query($connection, $query);
    while($loop=mysqli_fetch_assoc($select_user_query)){

        $user_id         = $loop['id'];
        $username        = $loop['username'];
        $user_firstname  = $loop['user_firstname'];
        $user_lastname   = $loop['user_lastname'];
        $user_role       = $loop['user_role'];
        $user_email      = $loop['user_email'];
        $user_passord    = $loop['user_password'];


    }




if(isset($_POST['edit_users'])){

    //$user_id         = $_POST['id'];
    $username        = $_POST['username'];
    $user_firstname  = $_POST['user_firstname'];
    $user_lastname   = $_POST['user_lastname'];
    $user_role       = $_POST['user_role'];
    $user_email      = $_POST['user_email'];
    $user_password   = $_POST['user_password'];

    $query = "UPDATE admin_users SET username = '{$username}', user_firstname = '{$user_firstname}',user_lastname ='{$user_lastname}', user_role ='{$user_role}', user_email ='{$user_email}',user_password = '{$user_password}', user_date = now()  WHERE id = $edit_user_id";
    $select_query = mysqli_query($connection, $query);
    if(!$select_query){
        die("Query Failed". mysqli_error($connection));
    }

      
   echo "<div class='text-center'> <h4 class='btn btn-success' >User Updated</h4>  <h4 class='btn btn-default'> <a href='users.php' >View Users <a/></h4> </div> ";

  

}

}else{

    header("Location: ./includes/index.php");
}
    

?>


<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
<label for="firstname">Firstname</label>
<input type="text" value=" <?Php echo $user_firstname;  ?>" class="form-control" name="user_firstname" required>
</div>

<div class="form-group">
<label for="lastname">Lastname</label>
<input type="text"  value=" <?Php echo $user_lastname;  ?>"  class="form-control" name="user_lastname" required>
</div>


<div class="form-group">

<select name="user_role" id="" class="form-control">

<option value='<?php echo $user_role ;?>'> <?php echo $user_role ;?> </option>

<?php

if($user_role === 'admin'){

    echo " <option value='subscriber'>subscriber</option> ";

}else{

   echo " <option value='admin'>admin</option> ";
}


?>


</select>

</div>


<div class="form-group">
<label for="username">Username</label>
<input type="text"  value=" <?Php echo  $username;  ?>"  class="form-control" name="username" required >
</div>


    

<div class="form-group">
<label for="email">Email</label>
<input type="email" autocomplete="off"  value=" <?Php echo $user_email;  ?>"  class="form-control" name="user_email" required >
</div>

     
<!-- <div class="form-group">
<label for="password">Password</label>
<input type="password" autocomplete="off"   class="form-control" name="user_password" required >
</div> -->


<div class="form-group">
<input type="submit" class="btn btn-primary" name="edit_users" value="Edit User">
</div>

</form>