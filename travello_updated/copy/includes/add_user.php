<?php 

if(isset($_POST['create_user'])){

    $username        = $_POST['username'];
    $user_firstname  = $_POST['user_firstname'];
    $user_lastname   = $_POST['user_lastname'];
    $user_role       = $_POST['user_role'];
    $user_email      = $_POST['user_email'];
    $user_password    = $_POST['user_password'];


    $hashFormat = "$2y$10$";
    $salt = "iusesomeamazingstrings";
    $hashF_and_salt = $hashFormat . $salt ;
    $user_passwords = crypt($user_password, $hashF_and_salt);


    $query = "INSERT INTO admin_users (username,user_firstname,user_lastname,user_role,user_email,user_password,user_date) VALUES ('{$username}','{$user_firstname}','{$user_lastname}','{$user_role}','{$user_email}','{$user_passwords}',now() )";
    $add_user_query = mysqli_query($connection,$query);



    echo "<button class='btn btn-default'>User Created</button>". "  " . " <button class='btn btn-secondary'><a href='users.php'>View Users</a></button>";

}

?>

<form action="" method="post" autocomplete="off" enctype="multipart/form-data">


<div class="form-group">
<label for="firstname">Firstname</label>
<input type="text" class="form-control" name="user_firstname" required>
</div>

<div class="form-group">
<label for="lastname">Lastname</label>
<input type="text" class="form-control" name="user_lastname" required>
</div>

<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" name="username" required>
</div>


<div class="form-group">

<select name="user_role" id="" class="form-control">

 <option value='subscriber'> Select User Role </option> ;
 <option value='admin'>Admin</option> ;
 <option value='subscriber'> Subscriber </option> ;

</select>

</div>


<div class="form-group">
<label for="email">Email</label>
<input type="email" autocomplete="off" class="form-control" name="user_email" required>
</div>

     
<div class="form-group">
<label for="password">Password</label>
<input type="password" autocomplete="off" class="form-control" name="user_password" required>
</div>


<div class="form-group">
<input type="submit" class="btn btn-primary" name="create_user" value="Add User">
</div>



</form>